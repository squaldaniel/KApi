<?php
namespace kingkernel\App\Controllers\index;
class index 
{
    public function response()
    {
        
        return [
            'Aplication: '=>APP_NAME,
            "Version: "=> APP_VERSION
            ];
    }
}