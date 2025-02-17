<?php
namespace kingkernel\Commands;
class create 
{
    public function __construct()
    {
        
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
}