<?php
/**
 * Micro api da kingkernel
 */
require('vendor/autoload.php');
use kingkernel\Kapi;
// inicializa a api
$api = new Kapi;
// inicializa variaveis e constantes da API
$api->bootstrap();
// starta api
$api->run();

