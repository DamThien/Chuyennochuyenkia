<?php
class App{
    protected $controller = "Home";
    protected $action = "Index";
    protected $params = [];
    function __construct()
    {
        // Array ( [0] => Home [1] => SayHi [2] => a [3] => b [4] => c )
        $arr = $this->urlProcess();

        //get controller Home/Show/1
        if (isset($arr[0])) {
            if (file_exists("./Application/Controllers/$arr[0].php")) {
                $this->controller = ucfirst($arr[0]);
            } 
            else {
                Error();
                return;
            }
            unset($arr[0]);
        }
        require_once "./Application/Controllers/$this->controller.php";
        $this->controller = new $this->controller;
        //get action 
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = ucfirst($arr[1]);
            } 
            else {
                Error();
                return;
            }
            unset($arr[1]);
        }
        //get params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    
    }

    function UrlProcess()
    {
        if ( isset($_GET["url"]) ) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}