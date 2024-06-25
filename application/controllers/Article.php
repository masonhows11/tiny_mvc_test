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
        printf($articles);
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

        $article = new  ArticleModel;
        $article->insert($_POST);
        return $this->redirect('article');
        
    }

    public function edit($id)
    {
        $category = new  Category;
        $categories = $category->all(); 


        $obj_article = new  ArticleModel;
        $article = $obj_article->find($id); 
      
        return  $this->view('panel.article.edit',compact('article'));
    }

    public function update($id)
    {
        $obj_article = new  ArticleModel;
        $obj_article->update($id,$_POST); 
        return $this->redirect('article');
    }

    public function delete($id)
    {
       
        $obj_article = new  ArticleModel;
        $obj_article->delete($id); 
        return $this->back();
    }


    public function show($id)
    {
        
    }

   
}
