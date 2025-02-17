<?php
require('vendor/autoload.php');

use kingkernel\Kapi;
// inicializa a api
$api = new Kapi;
$api->boostrap();
// inicializa a api
$api->run();
