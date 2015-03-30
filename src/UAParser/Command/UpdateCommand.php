<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use UAParser\FileLoader;
use UAParser\FileLoadException;
use UAParser\Translator;

class UpdateCommand extends Command
{
    /**
     * @var string
     */
    private $translator;

    /**
     * @var FileLoader
     */
    private $fileLoader;

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

        $this->fileLoader = new FileLoader();

        $this->defaultTarget = __DIR__ . '/../../../resources/regexes.php';

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

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if(!$regexes = $this->loadRegex($input->getOption('source'), $output))
        {
            return 1;
        }

        // See if we have an additional file or directory to look through
        if($patchFile = $input->getOption('patch'))
        {
            if(!$patches = $this->loadRegex($patchFile, $output))
            {
                return 2;
            }

            $regexes = array_replace_recursive($patches, $regexes);

            $output->writeln("Merged in patch file $patchFile");
        }

        $outputTarget = $input->getOption('output');

        $this->write($outputTarget, $regexes);

        $output->writeln('<info>Success: ' . $outputTarget . ' has been updated</info>');

        return 0;
    }

    /**
     * @param $out
     * @param $data
     * @return bool
     */
    public function write($out,$data)
    {
        is_dir(dirname($out)) or mkdir(dirname($out), 0777, true);

        file_put_contents($out,'<?php return ' . var_export($data, 1). ';');

        return true;
    }

    /**
     * @param $patchFile
     * @param OutputInterface $output
     * @return array
     * @throws \Exception
     */
    public function loadRegex($patchFile, OutputInterface $output)
    {
        $arr = array();

        try
        {
            $files = $this->fileLoader->load($patchFile);
        }
        catch(FileLoadException $e)
        {
            $output->writeln('<error>Regex patch load failed with message '.$e->getMessage().'</error>');

            return false;
        }

        foreach($files as $filename => $content)
        {
            $output->writeln("Loaded file: $filename");

            $arr = array_merge_recursive($arr, $this->translator->translate($content));
        }

        if(!$arr)
        {
            $output->writeln("<error>No regexes were found</error>");

            return false;
        }

        return $arr;
    }
}
