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