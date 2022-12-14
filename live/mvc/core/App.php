<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class App {
    protected $controller = "Register";
    protected $action = "SayHi";
    protected $params = [] ;

    function __construct() {
        $arr = $this -> UrlProcess ();
        //print_r($arr);
        
        // xử lí controller
        if ($arr && file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        // xử lí action
        if ( isset($arr[1]) ){
            if(method_exists($this->controller , $arr[1])) {
                $this->action = $arr[1] ;
            }
            unset($arr[1]);
        }
        
        // xử lí params
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([ new $this->controller, $this->action], $this->params );
    }

    function UrlProcess () {
        // Home/SayHi/1/2/3
        if (isset ($_GET["url"] ) ) {
          return  explode ("/",  filter_var(trim($_GET["url"], "/")));
           
        }
    }
}
?>