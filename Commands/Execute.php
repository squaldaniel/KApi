<?php
namespace kingkernel\Commands;

use kingkernel\Commands\create;
class Execute 
{
    public $arguments;
    public function __construct($argv)
    {
        require(dirname(__DIR__).'/config/funcoes.php');
        $this->arguments = array_diff($argv, ['kapi']);
        return $this;
    }
    public function execute()
    { 
        if(count($this->arguments) > 0){
            $params = $this->getCLasseAndFunction($this->arguments[1]);
            $class = $params[0];
            $fn = $params[1];
            $namespace = NAMESPACE_COMMANDS;
            $instabcia = $namespace.'\\'.$class;
            $comando = new $instabcia();
            print_r($this->arguments);
            // $comando->$fn($this->arguments[2]);
            // $command = new kingkernel\Commands\$params[0]();
            
        } else {
            echo 'exibir ajuda';
        }
        
    }
    public function loadCommand($arguments)
    {
        $arrClass = explode(':', $arguments)[0];
        $command = new $arrClass();
        return $arrClass;
    }
    public function getCLasseAndFunction($paran)
    { 
        $class = explode(':', $paran)[0];
        $function = explode(':', $paran)[1];
        return [$class, $function];
    }
}