<?php

require 'core/autoloader.php';
$app = require_once 'core/Core.php';

/**
 * Start application
 */
$app->run();

/**
 * Shut down when work are finished
 */
$app->shutdown();


function dd($q)
{
    echo '<pre>';
    var_dump($q);
    echo '</pre>';
    die();
}