<?php
define('APP_DIR', dirname(__DIR__));
define('APP_CONTROLLERS', dirname(__DIR__).'/App/Controllers/');
define('APP_MODELS', dirname(__DIR__).'/App/Models/');
define('APP_RESPONSERS', dirname(__DIR__).'/App/Response/');
define('APP_VERSION', '0.1-development');
define('APP_NAME', 'KAPI');
define('NAMESPACE_COMMANDS', 'kingkernel\Commands');
define('NAMESPACE_CONTROLLERS', 'Kingkernel\App\Controllers\'');
define('DIR_EXCLUDED', ['.', '..']);
/**
 * Retorna os diretorios, excluindo os diretórios de navegação
 * @param strig path|caminho do diretório
 * @return array lista de diretórios
 */

function loadDir($dirpath):array
{
    return array_values(array_diff(scandir($dirpath), DIR_EXCLUDED));
}
