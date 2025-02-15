<?php
/**
 * Micro api na pasta services
 */
require('vendor/autoload.php');
use kingkernel\KApi;

$api = new KApi;
$api->listen();