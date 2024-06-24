<?php

namespace system\bootstrap;


class Autoload{

    // Loading required classes automatically
    public function autoload()
    {
       spl_autoload_register(function($className)
       {

        $className = str_replace("\\",DIRECTORY_SEPARATOR ,$className);
        include_once $_SERVER['DOCUMENT_ROOT'] .'/tinymvc/'. $className .'.php';

       });
    }
}