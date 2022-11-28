<?php

namespace App\Command;

use App\Service\FooService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 */
class BuggedCommand extends Command
{
    protected static $defaultName = 'app:demo-command:bugged';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /**
         * this SHOULD print "Hello, World!" because of the Compiler Pass
         */
        dd(
            FooService::$var
        );
    }
}
