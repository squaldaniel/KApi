<?php
namespace kingkernel\Commands;
class Execute 
{
    public $arguments;
    public function __construct($argv)
    {
        $this->arguments = $argv;
        return $this;
    }
    public function execute()
    {
        print_r($this->arguments);
    }
}