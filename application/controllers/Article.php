<?php

namespace application\controllers;


use application\models\Article as ArticleModel;
use application\models\Category;

class Article extends Controller
{

    public function index()
    {
       
        $article = new  ArticleModel;
        $articles = $article->all(); 
        var_dump($articles);
        return  $this->view('panel.article.index',compact('articles'));
    }

    public function create()
    {
        
        $category = new  Category;
        $categories = $category->all(); 
        
        return  $this->view('panel.article.create',compact('categories'));
    }


    public function store()
    {
        
    }

    public function edit($id)
    {
      
        return  $this->view('panel.article.edit');
    }

    public function update($id, $value)
    {
        
    }


    public function show($id)
    {
        
    }

    public function delete($id)
    {
       
    }
}
