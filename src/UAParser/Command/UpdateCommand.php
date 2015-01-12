<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use UAParser\Translator;

class UpdateCommand extends Command
{
    /**
     * @var string
     */
    private $translator;

    /**
     * @var string
     */
    private $defaultTarget;

    /**
     * @var string
     */
    private $defaultSource;

    public function __construct()
    {
        $this->translator = new Translator();

        $this->defaultTarget = __DIR__ . '/../../resources/regexes.php';

        $this->defaultSource = 'https://raw.githubusercontent.com/ua-parser/uap-core/master/regexes.yaml';

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('update')
            ->setDescription('Fetches an updated YAML file for ua-parser and overwrites the current PHP file.')
            ->addOption('source','s', InputOption::VALUE_REQUIRED, 'The download source for the regex file', $this->defaultSource)
            ->addOption('output','o', InputOption::VALUE_REQUIRED, 'The target file for the built regex array', $this->defaultTarget)
            ->addOption('patch','p', InputOption::VALUE_REQUIRED, 'Include any yaml files in the given directory')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if(!$regexes = $this->loadPatch($input->getOption('source')))
        {
            throw new \Exception('Regex file could not be loaded');
        }

        // See if we have an additional file or directory to look through
        if($patchFile = $input->getOption('patch'))
        {
            $patch = $this->loadPatch($patchFile);

            $regexes = array_replace_recursive($patch, $regexes);

            $output->writeln("Merged in patch file $patchFile");
        }

        $outputTarget = $input->getOption('output');

        $this->write($outputTarget, $regexes);

        $output->writeln('<info>Success: ' . $outputTarget . ' has been updated</info>');

    }

    public function write($out,$data)
    {
        is_dir(dirname($out)) or mkdir(dirname($out), 0777, true);

        file_put_contents($out,'<?php return ' . var_export($data, 1). ';');

        return true;
    }

    public function loadPatch($patchFile)
    {
        if(is_dir($patchFile))
        {
            $arr = array();

            foreach(new \IteratorIterator(new \RecursiveDirectoryIterator($patchFile, \RecursiveDirectoryIterator::SKIP_DOTS)) as $file)
            {
                if(preg_match('/\.(yml|yaml)/', $patchFile))
                {
                    $arr = array_merge_recursive($this->loadPatch($file), $arr);
                }
            }

            return $arr;
        }

        if(!preg_match('/^http(s)?:\/\//', $patchFile) && !is_file($patchFile))
        {
            throw new \Exception('Path ' . $patchFile . ' is not a file or directory');
        }

        $patch = file_get_contents($patchFile);

        return $this->translator->translate($patch);
    }
}
