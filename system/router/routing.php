<?php

namespace system\router;

use ReflectionMethod;

class Routing
{

    private $current_route;


    public function __construct()
    {
        global $current_route;
        $this->current_route = explode('/', $current_route);
    }


    public function run()
    {
        //// found and set controller
        $path = realpath(dirname(__FILE__) . "/../../application/controllers/" . $this->current_route[0] . ".php");
        if (!file_exists($path)) {
            echo "404 - file not exists";
            exit;
        }


        //// found and set method
        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1];
        ////
        $class = "application\controllers\\" . $this->current_route[0];
        //// create obj  from class controller
        $object = new $class;
        //// run  method in class controller
        if (method_exists($object, $method)) {
            //// 
            $reflection = new ReflectionMethod($object, $method);
            $parameterCount = $reflection->getNumberOfParameters();
            ////
            if ($parameterCount <= count(array_slice($this->current_route, 2)))
                call_user_func_array(array($object, $method), array_slice($this->current_route, 2));
            else {

                echo "404 - parameter error";
                exit;
            }
        } else {
            echo "404 - method not exists";
            exit;
        }
    }
}
