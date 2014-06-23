<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Behat\MinkBundle\MinkBundle(),
            new Savch\MinkPageObjectBundle\SavchMinkPageObjectBundle(),
            new Savch\MinkPageObjectBundle\Tests\MinkPageObjectTestBundle\SavchMinkPageObjectTestBundle(),
        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/Resources/config.php');
    }

    public function loadClassCache($name = 'classes', $extension = '.php')
    {
    }
}
