<?php
namespace kingkernel\Commands;
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
        if(count($this->arguments) == 0)
        {
            return $this->help();
        } else {
            print_r($this->arguments);
        }
        
    }
    public function help()
    {
        echo 'exibir ajuda';
    }
}