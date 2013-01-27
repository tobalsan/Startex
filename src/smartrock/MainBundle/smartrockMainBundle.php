<?php

namespace SmartRock\MainBundle;

$app['twig.loader.filesystem']->addPath(__DIR__ . '/Resources/views/');


/**
 * Register every bundle's controller and views paths right here
 */

// Page controller
$app['PageController'] = $app->share(function() use ($app) {
    return new Controller\PageController();
});

$app['twig.loader.filesystem']->addPath(__DIR__ . '/Resources/views/Page', 'Page');
