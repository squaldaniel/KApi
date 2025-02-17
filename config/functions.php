<?php
// App  dir
define('APP_DIR', __DIR__);
define('CONTROLLERS_DIR', dirname(__DIR__).'/App/Controllers/');
define('MODELS_DIR', dirname(__DIR__).'/App/Controllers/');
define('RESPONSES_DIR', dirname(__DIR__).'/App/Controllers/');

function loadControllers()
{
    $controllers = array_diff(scandir(CONTROLLERS_DIR), ['.', '..']);
    return $controllers;
}