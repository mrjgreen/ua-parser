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
    /**
     * @var Yaml
     */
    private $yamlParser;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var Parser
     */
    private $parser;

    protected function configure()
    {
        $defaultRegexData = __DIR__ . '/../../resources/regexes.php';

        $this
            ->setName('test')
            ->setDescription('Runs the tests against the parser.')
            ->addArgument('uastring', InputArgument::OPTIONAL, 'A user agent string to test')
            ->addOption('source', 's', InputOption::VALUE_REQUIRED, 'The regex source data', $defaultRegexData)
            ->addOption('tests', 't', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_REQUIRED, 'The test files, or a folder containing the test data files in yaml format')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $this->yamlParser = new Yaml();

        $regexes = include $input->getOption('source');

        $this->parser = new Parser($regexes);

        if($ua = $input->getArgument('uastring'))
        {
            $string = $this->parser->parse($ua, true);

            $output->writeln($ua);

            $output->writeln($this->formatArray($string));

            return;
        }

        $testFiles = $input->getOption('tests');

        $testTypes = array('os', 'device', 'user_agent');

        $passed = 0;
        $total = 0;

        foreach($testFiles as $testFile)
        {
            $tests = $this->loadTestFile($testFile, $output);

            foreach($testTypes as $type)
            {
                if(!isset($tests[$type])) continue;

                foreach($tests[$type] as $test)
                {
                    $total++;
                    $passed += $this->runTest($test, $type);
                }
            }
        }

        $failed = $total - $passed;

        $output->writeln("<info>Passed: $passed</info>");
        $output->writeln("<error>Failed: $failed</error>");
    }

    private function runTest($test, $type)
    {
        $expected = array_diff_key($test, array('user_agent_string' => 1, 'js_ua' => 1, 'js_user_agent_v1' => 1));

        $parsed = $this->parser->parse($test['user_agent_string']);

        if(array_diff($expected, (array)$parsed[$type]))
        {
            $this->printError($test['user_agent_string'], $parsed[$type], $expected);

            return false;
        }

        if($this->output->getVerbosity() >= OutputInterface::VERBOSITY_VERY_VERBOSE)
        {
            $this->printError($test['user_agent_string'], $parsed[$type], $expected, true);
        }

        return true;
    }

    private function printError($ua, $parsed, $expected, $passed = false)
    {
        $this->output->writeln($passed ? "Test passed: $ua" : "Test failed: $ua");
        $this->output->writeln("Expected:");
        $this->output->writeln($this->formatArray($expected));
        $this->output->writeln("Got:");
        $this->output->writeln($this->formatArray($parsed));
        $this->output->writeln("");
    }

    protected function formatArray(array $array)
    {
        $string = '';

        foreach($array as $key => $value)
        {
            $string .= $key . ' : ' . json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL;
        }

        return $string;
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

        if($this->output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE)
        {
            $output->writeln("Loaded file: $testFile");
        }

        return $this->yamlParser->parse($tests);
    }
}
