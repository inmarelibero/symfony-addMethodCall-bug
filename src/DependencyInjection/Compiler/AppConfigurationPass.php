<?php

namespace App\DependencyInjection\Compiler;

use App\Service\BarService;
use App\Service\FooService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 *
 */
class AppConfigurationPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        /*
         * set configured SmartContracts to service
         */
        $container->getDefinition(FooService::class)->addMethodCall('setVar', ['Hello, World!']);
        $container->getDefinition(BarService::class)->addMethodCall('setVar', ['Hello, World!']);
    }
}
