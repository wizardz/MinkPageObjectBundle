<?php

namespace Savch\MinkPageObjectBundle;

use Savch\MinkPageObjectBundle\DependencyInjection\Compiler\NamespaceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SavchMinkPageObjectBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new NamespaceCompilerPass());
    }
}
