<?php
namespace kingkernel\Commands;
class create 
{
    public function __construct()
    {
        // echo 'classe create instanciada';
    }
    public function helpMessage()
    {
        $className = $this->getClassName();
        return $className ." : Classe usada para criar objetos na aplicação.\n";
    }
    function getClassName()
    {
        return __CLASS__;
    }
    public function controller($nome)
    {
        $controller = array_diff(scandir(APP_CONTROLLERS), DIR_EXCLUDED);
        if(in_array($nome, $controller)){
            echo 'O controller já existe';
        } else {
            if(mkdir(APP_CONTROLLERS.$nome)){
                echo 'diretorio criado!';
            };
        }
        
    }
}