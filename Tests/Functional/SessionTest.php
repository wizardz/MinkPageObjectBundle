<?php
namespace Savch\MinkPageObectBundle\Tests\Functional;

use Savch\MinkPageObjectBundle\Test\MinkTestCase;

class SessionTest extends MinkTestCase
{
    /**
     * Test find a page by name
     */
    public function testGetPageWithoutBundle()
    {
        $page = $this->getPage('Home Page');
        $this->assertEquals("Page 1", $page->getElement('title')->getText());
        $page = $this->getPage('HomePage');
        $this->assertEquals("Page 1", $page->getElement('title')->getText());
    }

    /**
     * Test find a page by bundle and name
     */
    public function testGetPageWithBundle()
    {
        $page = $this->getPage('MinkPageObjectTestBundle:HomePage');
        $this->assertEquals("Page 1", $page->getElement('title')->getText());
        $page = $this->getPage('MinkPageObjectTestBundle:Home Page');
        $this->assertEquals("Page 1", $page->getElement('title')->getText());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetPageNoPageFound()
    {
        $this->getPage('Not Found Page');
    }
}
