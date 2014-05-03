<?php

require 'vendor/autoload.php';

$app = new Zhmuh\Core(__DIR__);

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