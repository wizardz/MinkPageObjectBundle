<?php

namespace Savch\MinkPageObjectBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NamespaceCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('savch.page_object_extension.class_name_resolver')) {
            return;
        }
        $pageNamespaces = $elementNameSpaces = array();
        foreach ($container->getParameter('kernel.bundles') as $namespace) {
            $segments = explode('\\', $namespace);
            array_pop($segments);
            $namespace = implode("\\", $segments);
            $pageNamespaces[]       = sprintf("%s\\Tests\\Web\\Page", $namespace);
            $elementNameSpaces[]    = sprintf("%s\\Tests\\Web\\Element", $namespace);
        }
        $container->getDefinition('savch.page_object_extension.class_name_resolver')
            ->replaceArgument(0, $pageNamespaces)
            ->replaceArgument(1, $elementNameSpaces);
    }
}
