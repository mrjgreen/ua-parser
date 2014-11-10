<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ParseCommand extends Command
{
    protected function configure()
    {
        $defaultRegexData = __DIR__ . '/../../resources/regexes.php';

        $this
            ->setName('parse')
            ->setDescription('Parses a given user agent string')
            ->addArgument('useragent', InputArgument::REQUIRED, 'The user agent string to parse')
            ->addOption('source', 's', InputOption::VALUE_REQUIRED, 'The regex source data', $defaultRegexData)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $regexes = include $input->getOption('source');

        $parser = new \UAParser\Parser($regexes);

        $details = $parser->parse($input->getArgument('useragent'), true);

        $output->writeln('<info>' . $this->formatArray($details) . '</info>');

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
}