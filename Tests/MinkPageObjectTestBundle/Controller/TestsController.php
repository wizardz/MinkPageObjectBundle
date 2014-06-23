<?php

namespace Savch\MinkPageObjectBundle\Tests\MinkPageObjectTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestsController extends Controller
{
    public function pageAction($page)
    {
        return $this->render('SavchMinkPageObjectTestBundle::page.html.php', array(
            'page' => preg_replace('/page(\d+)/', 'Page N\\1', $page),
            'environment' => $this->get('kernel')->getEnvironment(),
        ));
    }
}
