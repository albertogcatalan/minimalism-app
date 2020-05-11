<?php
/**
 * Copyright (c) 2020 Alberto González
 */

if (PHP_SAPI === 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

    if (is_file(__DIR__ . $file)) {
        return false;
    }
}

require_once '../bootstrap.php';

// Set config
$config = \Minimalism\Core\Config::getInstance();

$app = new \Minimalism\App\Core\App($config);
$app->run();
