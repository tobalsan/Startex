<?php

/**
 * Application main file
 *
 * Application configuration
 */

require_once __DIR__ . '/bootstrap.php';

$app['debug'] = true;

// Include routing
require_once __DIR__ . '/routing.php';

// Include bundles
require_once __DIR__ . '/../src/smartrock/MainBundle/smartrockMainBundle.php';

// Twig customization: add "asset" function from Symfony2
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    $asset = new \Twig_SimpleFunction('asset', function ($url) use ($app) {
        $assetDir = isset($ap->options['asset.directory']) ? $app['asset.directory'] : $app['request']->getBasePath();

        return sprintf('%s/%s', $assetDir, ltrim($url, '/'));
    });
    $twig->addFunction($asset);

    return $twig;
}));