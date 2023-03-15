<?php
namespace App\boostrap;
@session_start();
class Router {
    public static $routers = [];
    protected Request $test;
//    Cùng namescpace thì gọi thẳng ra được
    public function __construct(){
        $this->test = new Request();
    }

    public static function get($path,$callback){
        static::$routers["get"][$path] = $callback;
    }

    public static function post($path,$callback){
        static::$routers["post"][$path] = $callback;
    }


    public function resolve() {
        $path = $this->test->getPath();
        $method = $this->test->getMethod();
        $callback = false;
        if (isset(static::$routers[$method][$path])) {
            $callback = static::$routers[$method][$path];
        }
        if($callback === false){
            require_once    "./views/screen/error/403.php";
//            header('location:../login');
            return 0;
        }

        if(is_callable($callback)){
            return $callback();
        }

        if(is_array($callback)){
            [$class, $action] = $callback;
            $class = new $class;
            return call_user_func_array([$class, $action], []);
        }
    }
}