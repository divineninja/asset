  <?php

class Bootstrap {

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/'); //trimming the /
        $url = explode('/', $url); //explode the url

        //print_r($url);
        
        if(empty($url[0])){
           require 'controllers/index.php';
           $controller = new Index();
           $controller->loadModel('index');
           $controller->index();
           return false; // the following blocks of codes won't exe
        }
        
        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)){
            require $file;
        }
        else {
            require ('controllers/error.php');
            $controller = new Error();
            $controller->index();
            return false;
        }
        
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        //calling methods
        
        if (isset($url[2])) {
            
            if (method_exists($controller, $url[1])){
                
                $controller->{$url[1]}($url[2]);
                
            }else{
                
                $this->error();
                
            }
        } else {
            
            if (isset($url[1])) {
                
                if (method_exists($controller, $url[1])){
                
                $controller->{$url[1]}();
                
                }else{
                
                $this->error();
                
                }
                
            }else{
                 $controller->index();
            }
        }        
    }
    function error(){
        
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }

}