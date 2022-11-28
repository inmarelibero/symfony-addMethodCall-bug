<?php

namespace App\Command;

use App\Service\BarService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 */
class WorkingCommand extends Command
{
    protected static $defaultName = 'app:demo-command:working';

    private BarService $barService;

    /**
     * @param string|null $name
     * @param BarService $barService
     */
    public function __construct(string $name = null, BarService $barService)
    {
        parent::__construct($name);

        /**
         * useless initialization because then the class is used statically, but necessary to trigger the Compiler Pass
         */
        $this->barService = $barService;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        dd(
            BarService::$var
        );
    }
}
