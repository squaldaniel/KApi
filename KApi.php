<?php
namespace kingkernel;

class KApi
{
    public $route;
    public $paramString;

    public function __construct()
    {
        $str_stringFull = str_replace('rota=index.php&rota=', '', $_SERVER['QUERY_STRING']);
        $paramsAPI = explode('/', $str_stringFull);
        $this->route = $paramsAPI[0];
        $this->paramString = $paramsAPI[1] ?? '';
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
        return '';
    }
}
