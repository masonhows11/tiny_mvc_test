<?php

namespace application\controllers;

class Home  extends Controller{

    public function index(){

        $this->view('app.index');
       // echo "hi from index fun home controller" .PHP_EOL;
    }


    public function create(){

       // echo "hi from create fun in home controller" .PHP_EOL;
    }

}