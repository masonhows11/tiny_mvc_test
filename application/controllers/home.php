<?php

namespace application\controllers;

class Home  extends Controller{

    public function index(){

        $product = 'mobile';
        $this->view('app.index',compact('product'));
       // echo "hi from index fun home controller" .PHP_EOL;
    }


    public function create(){
        $this->view('app.create');
       // echo "hi from create fun in home controller" .PHP_EOL;
    }

}