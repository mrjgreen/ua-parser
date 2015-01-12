<?php namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use UAParser\Parser;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('test')
            ->setDescription('Runs the tests against the parser.')
            ->addArgument('uastring', InputArgument::OPTIONAL, 'A user agent string to test')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $parser = new Parser();

        if($ua = $input->getArgument('uastring'))
        {
            $string = $parser->parse($ua, true);

            $output->writeln($ua);

            $output->writeln(json_encode($string, JSON_PRETTY_PRINT));
        }
    }
}