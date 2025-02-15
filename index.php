<?php
/**
 * Micro api na pasta services
 */
require('vendor/autoload.php');
use kingkernel\KApi;

$api = new KApi;

print_r($_SERVER['REQUEST_URI']);