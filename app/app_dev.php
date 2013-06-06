<?php

use Silex\Provider\WebProfilerServiceProvider;

require_once 'app.php';

// enable the debug mode
$app['debug'] = true;

$app->register($p = new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/cache/profiler',
));
$app->mount('/_profiler', $p);

