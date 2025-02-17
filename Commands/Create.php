<?php
namespace kingkernel\Commands;
class Create 
{
    public function __construct()
    {
        
    }
    public function helpMessage()
    {
        $className = $this->getClassName();
        return __CLASS__ ." : Classe usada para criar objetos na aplicação.\n";
    }
    function getClassName()
    {
        return __CLASS__;
    }
}