<?php
namespace GeoffGarit\CsvBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseCsvCommand extends Command
{
    protected static $defaultName = 'csv-bundle:parse';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello world !');

        return Command::SUCCESS;
    }
}
