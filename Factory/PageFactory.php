<?php

namespace Savch\MinkPageObjectBundle\Factory;

use Behat\Mink\Mink;
use Savch\MinkPageObjectBundle\Factory\ClassNameResolver;
use SensioLabs\Behat\PageObjectExtension\Context\PageFactory as BasePageFactory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

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
        parent::__construct($mink, $pageParameters);
        $this->classResolver = $classResolver;
    }

    /**
     * @param string $name
     *
     * @return Page
     */
    public function createPage($name)
    {
        return parent::createPage(ltrim($this->classResolver->resolvePage($name), "\\"));
    }

    /**
     * @param string $name
     *
     * @return Element
     */
    public function createElement($name)
    {
        return parent::createElement(ltrim($this->classResolver->resolvePage($name), "\\"));
    }
}
