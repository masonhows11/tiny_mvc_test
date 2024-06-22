<?php

namespace system\router;


class Routing{

    private $current_route;


    public function __construct()
    {

        global $current_route;
        $this->current_route = explode('/',$current_route);
        
    }


    public function run()
    {


        //// found and set controller
        $path = realpath(dirname(__FILE__)."/../../application/controllers/". $this->current_route[0]."php");
        if(!file_exists($path)){
            echo "404 - file not exists";
            exit;
        }
        //// found and set method
        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1];

        ////
        $class = "application\controllers\" . $this->current_route[0];

    }


}
