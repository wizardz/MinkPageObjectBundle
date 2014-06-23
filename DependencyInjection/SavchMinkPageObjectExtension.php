<?php

namespace Savch\MinkPageObjectBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class SavchMinkPageObjectExtension extends Extension
{
    /**
     * Loads the services based on your application configuration.
     *
     * @param array $configs
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = $this->getFileLoader($container);
        $loader->load('services.xml');
    }

    /**
     * Get File Loader
     *
     * @param $container
     *
     * @return XmlFileLoader
     */
    public function getFileLoader($container)
    {
        return new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    }
}
