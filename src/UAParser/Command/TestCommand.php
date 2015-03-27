<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;
use UAParser\Parser;

class TestCommand extends Command
{
    private $yamlParser;
    private $parser;

    protected function configure()
    {
        $this
            ->setName('test')
            ->setDescription('Runs the tests against the parser.')
            ->addArgument('uastring', InputArgument::OPTIONAL, 'A user agent string to test')
            ->addOption('tests', 't', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_REQUIRED, 'The test files, or a folder containing the test data files in yaml format')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->yamlParser = new Yaml();

        $this->parser = new Parser();

        if($ua = $input->getArgument('uastring'))
        {
            $string = $this->parser->parse($ua, true);

            $output->writeln($ua);

            $output->writeln(json_encode($string, JSON_PRETTY_PRINT));

            return;
        }

        $testFiles = $input->getOption('tests');

        $testTypes = array('os', 'device', 'user_agent');

        foreach($testFiles as $testFile)
        {
            $tests = $this->loadTestFile($testFile, $output);

            foreach($testTypes as $type)
            {
                if(!isset($tests[$type])) continue;

                foreach($tests[$type] as $test)
                {
                    $this->runTest($test, $type);
                }
            }
        }
    }

    private function runTest($test, $type)
    {
        if(isset($test['js_ua'])) unset($test['js_ua']);
        if(isset($test['js_user_agent_v1'])) unset($test['js_user_agent_v1']);

        $ua = $test['user_agent_string'];
        unset($test['user_agent_string']);

        $parsed = $this->parser->parse($ua);

        $diff = array_diff((array)$parsed[$type], $test);

        if($diff)
        {
            echo "Test failed: $ua\n";
            echo "Expected:\n";
            echo json_encode($test, JSON_PRETTY_PRINT);
            echo "\nGot:\n";
            echo json_encode($parsed[$type], JSON_PRETTY_PRINT);
            echo "\n\n";
        }
    }

    private function loadTestFile($testFile, OutputInterface $output)
    {
        if(is_dir($testFile))
        {
            $arr = array();

            foreach(new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($testFile, \RecursiveDirectoryIterator::SKIP_DOTS)) as $file)
            {
                if(preg_match('/\.(yml|yaml)/', $file))
                {
                    $arr = array_merge_recursive($this->loadTestFile($file, $output), $arr);
                }
            }

            return $arr;
        }

        if(!preg_match('/^http(s)?:\/\//', $testFile) && !is_file($testFile))
        {
            throw new \Exception('Path ' . $testFile . ' is not a file or directory');
        }

        $tests = file_get_contents($testFile);

        $output->writeln("Loaded file: $testFile");

        return $this->yamlParser->parse($tests);
    }
}
