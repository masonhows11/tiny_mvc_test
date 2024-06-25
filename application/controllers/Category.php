<?php

namespace application\controllers;

use application\models\Category as CategoryModel;

class Category  extends Controller
{

    public function index()
    {
        $category = new  CategoryModel;
        $categories = $category->all();
        
        return  $this->view('panel.article.index', compact('categories'));
    }

    public function create()
    {
        # code...
    }


    public function store()
    {
        # code...
    }

    public function edit($id)
    {
        # code...
    }

    public function update($id, $value)
    {
        # code...
    }


    public function show($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
