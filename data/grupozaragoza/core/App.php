<?php
namespace Core;

/*
    http://mvc.local/user/index
    http://mvc.local/index.php?url=user/index
    
    La peticion get:
        http://mvc.local/controlador/metodo/arg1/arg

        http://mvc.local/user/show/1

        /user/show/1/  --->  user/show/1 (trim) --> [user,show,1] (explode)

    */

class App
{
    function __construct() {
        // Transformacion para el controlador
        isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home"; 
        // $url = isset($_GET["url"]) ? $_GET["url"] : "home"; es lo mismo

            $arguments = explode('/',trim($url,"/"));
        
            // obtener controlador
            $controllerName = array_shift($arguments); // user | product | home... ->
                                                        // UserController , ProductController
            $controllerName = ucwords($controllerName) . "Controller";

        // Transformacion para el method
        count($arguments) ? $method = array_shift($arguments) : $method = "index";
        // $method = count($arguments) ? array_shift($arguments) : "index"; es lo mismo

        // Importar el controlador
        $file = "../app/controllers/$controllerName" . ".php";

        if(file_exists($file)){
            require "$file";
        }
        else{
            http_response_code(404);
            echo "Recurso no encontrado";
            die();
        }

        // Crear instancia del controlador y llamar al metodo
        $controllerName = "\App\Controllers\\" . $controllerName;
        $controllerObject = new $controllerName; // new \App\Controllers\UserController

        //Verifico si el metodo existe en la peticion de la clase/Controlador
        if(method_exists($controllerObject,$method)){
            // Invocarlo
            $controllerObject->$method($arguments);
        }
        else{
            http_response_code(404);
            echo "Metodo no encontrado";
            die(); 
        }

    }//fin constructor
}// fin clase
