<?php
namespace App\boostrap;
class Request {
//    public static $nameClass;
    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace('/asm_php2/','/',$path);
        $positon = strpos($path,'?');
        if($positon) {
            $path = substr($path,0,$positon);
        }
        return $path;
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}