<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;
use UAParser\FileLoader;
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
        $defaultRegexData = __DIR__ . '/../../../resources/regexes.php';

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
            $parsed = $this->parser->parse($ua, true);

            $output->writeln($ua);

            $output->writeln($this->formatArray($parsed));
        }
        else
        {
            $tests = $input->getOption('tests');

            if(!$tests)
            {
                $output->writeln('<error>No test files. Specify a agent string as an argument or use --tests (-t) to specify test file locations</error>');
                return 1;
            }

            $this->runAllTests($tests, $output);
        }
    }

    /**
     * @param array $testFiles
     * @param OutputInterface $output
     */
    private function runAllTests(array $testFiles, OutputInterface $output)
    {
        $testTypes = array('os', 'device', 'user_agent');

        $passed = 0;
        $total = 0;

        foreach($testFiles as $testFile)
        {
            $tests = $this->loadTestFiles(new SplFileInfo($testFile), $output);

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

    /**
     * @param $test
     * @param $type
     * @return bool
     */
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

    /**
     * @param $ua
     * @param $parsed
     * @param $expected
     * @param bool $passed
     */
    private function printError($ua, $parsed, $expected, $passed = false)
    {
        $this->output->writeln($passed ? "Test passed: $ua" : "Test failed: $ua");
        $this->output->writeln("Expected:");
        $this->output->writeln($this->formatArray($expected));
        $this->output->writeln("Got:");
        $this->output->writeln($this->formatArray($parsed));
        $this->output->writeln("");
    }

    /**
     * @param array $array
     * @return string
     */
    private function formatArray(array $array)
    {
        $string = '';

        foreach($array as $key => $value)
        {
            $string .= $key . ' : ' . json_encode($value, JSON_PRETTY_PRINT) . PHP_EOL;
        }

        return $string;
    }

    /**
     * @param $testFile
     * @param OutputInterface $output
     * @return array
     */
    private function loadTestFiles($testFile, OutputInterface $output)
    {
        $loader = new FileLoader();

        $arr = array();

        foreach($loader->load($testFile) as $file => $content)
        {
            if($output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE)
            {
                $output->writeln("Loaded file: $file");
            }

            $arr = array_merge_recursive($this->yamlParser->parse($file), $arr);
        }

        return $arr;
    }
}
