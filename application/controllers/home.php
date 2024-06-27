<?php

namespace application\controllers;

use application\models\Article;
use application\models\Category;

class Home  extends Controller
{



    public function index()
    {
        # code...

        $category = new  Category;
        $categories = $category->all();

        $article = new  Article;
        $articles = $article->all();

        return $this->view('app.index',compact('categories','articles'));
    }

    public function category($id)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    // public function index()
    // {

    //     // $product = 'mobile';
    //     // $this->view('app.index',compact('product'));
    //     // echo "hi from index fun home controller" .PHP_EOL;
    // }


    // public function create()
    // {

    //     // $product = 'mobile';
    //     // $this->view('app.create',compact('product'));
    //     // $this->redirect('home');
    //     // $product = 'mobile';
    //     // $this->view('app.create',compact('product'));
    //     // echo "hi from create fun in home controller" .PHP_EOL;
    // }
}
