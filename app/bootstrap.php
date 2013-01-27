<?php

/**
 * Application bootstrap file
 *
 * Application and services initialization
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

// Register ServiceController service provider to use controllers as service
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Twig templates
$app->register(new Silex\Provider\TwigServiceProvider());
$app['twig']->addExtension(new \Entea\Twig\Extension\AssetExtension($app));