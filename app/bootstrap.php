<?php

/**
 * Application bootstrap file
 *
 * Application and services initialization
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

// Config
$app->register(new Igorw\Silex\ConfigServiceProvider(__DIR__."/parameters.yml"));de

// DBAL Layer
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => $app['db']['driver'],
        'host'     => $app['db']['host'],
        'dbname'   => $app['db']['dbname'],
        'user'     => $app['db']['user'],
        'password' => $app['db']['password'],
    ),
));

$app->register(new Silex\Provider\ServiceControllerServiceProvider()); // Register ServiceController service provider to use controllers as service
$app->register(new Silex\Provider\SessionServiceProvider()); // Session service provider
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider()); // Twig templates
$app['twig']->addExtension(new \Entea\Twig\Extension\AssetExtension($app));

/*
Model managers
An example of how to include a custom model manager if you choose to use this coding pattern
*/
// $app['some_service'] = $app->share(function ($app) { return new SmartRock\MainBundle\Model\MyCustomManager($app['db']); });