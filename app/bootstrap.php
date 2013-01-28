<?php

/**
 * Application bootstrap file
 *
 * Application and services initialization
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\ServiceControllerServiceProvider()); // Register ServiceController service provider to use controllers as service
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider()); // Twig templates
$app['twig']->addExtension(new \Entea\Twig\Extension\AssetExtension($app));