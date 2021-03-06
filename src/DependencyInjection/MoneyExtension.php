<?php

declare(strict_types=1);

namespace Money\MoneyBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

final class MoneyExtension extends ConfigurableExtension
{
    public function loadInternal(array $config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator([
            __DIR__ . '/../Resources/config/',
        ]));
        $loader->load('services.xml');
    }
}
