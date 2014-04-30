<?php

require 'vendor/autoload.php';

$app = Zhmug\Core();

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