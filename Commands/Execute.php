<?php
namespace kingkernel\Commands;

use kingkernel\Commands\create;
class Execute 
{
    public $arguments;
    public function __construct($argv)
    {
        $this->arguments = array_diff($argv, ['kapi']);
        return $this;
    }
    public function execute()
    {
        print_r($this->loadCommand($this->arguments[1]));
    }
    public function loadCommand($arguments)
    {
        $arrClass = explode(':', $arguments)[0];
        $command = new $arrClass();
        return $arrClass;
    }
}