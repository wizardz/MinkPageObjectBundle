<?php

namespace Savch\MinkPageObjectBundle\Test;

use Behat\MinkBundle\Test\MinkTestCase as BaseMinkTestCase;
use Savch\MinkPageObjectBundle\Factory\PageFactory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class MinkTestCase extends BaseMinkTestCase
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Set up everything
     */
    protected function setUp()
    {
        $this->pageFactory = $this->getKernel()->getContainer()->get('savch.page_object_extension.page_factory');
    }

    /**
     * Opens a page
     *
     * @param $name
     *
     * @return Page
     */
    protected function getPage($name)
    {
        return $this->pageFactory->createPage($name)->open();
    }
}
