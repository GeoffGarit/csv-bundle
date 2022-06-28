<?php

declare(strict_types=1);

namespace GeoffGarit\CsvBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseCsvCommand extends Command
{
    protected static $defaultName = 'geoffgarit:csv-bundle:parse';

    protected function configure(): void
    {
        $this->setName('geoffgarit:csv-bundle:parse');
        $this->setHelp('This command parse a csv file');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello world !');

        return Command::SUCCESS;
    }
}
