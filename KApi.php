<?php
namespace kingkernel;

class Kapi
{
    public $route;
    public $paramString;
    public $fullPath;

    public function __construct()
    {
        $str_stringFull = $_SERVER['REQUEST_URI'];
        $paramsAPI = explode('/', $str_stringFull);
        $this->route = $paramsAPI[1];
        $this->paramString = $paramsAPI[1] ?? '';
        $this->fullPath = $str_stringFull;
        return $this;

    }
    public function message(string $message = null)
    {
        echo date('Y-m-d H:i:s'). ' - API respondendo: '.$message;
    }
    public static function requestVerb()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    public function fetchJson($cn, $sql)
    {
        // $stm = $cn->query($sql);
        // $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        // return json_encode($result);
    }
    public function fetchArray($cn, $sql)
    {
        // $stm = $cn->query($sql);
        // $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
    }
    public function SourceDatatables(array $resultset)
    {
        $faseOne = [];
        foreach ($resultset as $key => $line) {
            $str_falseAray = '[' . implode(',', $line) . ']';

            array_push($faseOne, $str_falseAray);
        };
        return '[' . implode(',', $faseOne) . ']';
    }
    public function listen()
    {
        echo $this->route;
    }
    public function run()
    {
        // $controller = (explode('/', $this->fullPath));
        // print_r($controller[1]);
        // echo "\n<br/>"; 
        echo CONTROLLERS_DIR;
        // print_r($this->route);
    }
    public function loadRoute()
    {
        
    }
    public function bootstrap()
    {
        require(__DIR__.'/config/functions.php');
    }
}
