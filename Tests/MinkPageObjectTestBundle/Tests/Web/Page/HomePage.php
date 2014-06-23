<?php

namespace Savch\MinkPageObjectBundle\Tests\MinkPageObjectTestBundle\Tests\Web\Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class HomePage extends Page
{
    /**
     * @var array
     */
    protected $elements = array(
        'title'         => array('css' => 'title'),
    );

    /**
     * @var string $path
     */
    protected $path = '/_savch/page/{page}';
}
