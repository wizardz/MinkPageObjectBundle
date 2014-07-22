<?php

namespace Savch\MinkPageObjectBundle\Factory;

use Behat\Mink\Mink;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory\ClassNameResolver;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory\DefaultFactory as BasePageFactory;

class PageFactory extends BasePageFactory
{
    /**
     * @var ClassNameResolver
     */
    protected $classResolver;

    /**
     * @param Mink              $mink
     * @param ClassNameResolver $classResolver
     * @param array             $pageParameters
     */
    public function __construct(Mink $mink, ClassNameResolver $classResolver, array $pageParameters)
    {
        parent::__construct($mink, $classResolver, $pageParameters);
        $this->classResolver = $classResolver;
    }
}
