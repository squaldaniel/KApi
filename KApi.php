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
        if(file_exists(APP_CONTROLLERS.'/index/index.php')){
            echo 'arquivo existe';
        } else{
            header('Content-Type: application/json');
            $hello = [
                'Aplication: '=>APP_NAME,
                "Version: "=> APP_VERSION,
                'data:'=> $this->loadRoute()
            ];
            echo json_encode($hello);
        }
    }
    public function loadRoute()
    {
        return loadDir(APP_CONTROLLERS);
    }
    public function boostrap()
    {
        include(__DIR__.'/config/funcoes.php');
    }
}
