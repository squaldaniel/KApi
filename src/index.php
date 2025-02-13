<?php
/**
 * Micro api na pasta services
 */
require('Microapi.php');
// ----------------------------------------------------------------
//         Dados de conexão com o discador
// ----------------------------------------------------------------
require(dirname(__DIR__).'\conf\config_discador.php');

$dsn_discador = 'mysql:host='.$db_discador["hostname"].';dbname='.$db_discador["database"].';charset=utf8';
$PdoDiscador = new PDO($dsn_discador, $db_discador["user"], $db_discador["pass"]);
switch($api->route){
    case 'acionamento':
        echo " rota de ".$api->route;
        break;
    default:
    echo "defina uma rota!";
    break;
}