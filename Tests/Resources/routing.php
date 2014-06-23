<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add(
    '_savch_tests_page',
    new Route(
        '/_savch/page/{page}',
        array(
            '_controller' => 'Savch\MinkPageObjectBundle\Tests\MinkPageObjectTestBundle\Controller\TestsController::pageAction',
        )
    )
);

return $collection;
