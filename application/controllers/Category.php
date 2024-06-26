<?php

namespace application\controllers;

use application\models\Category as CategoryModel;

class Category  extends Controller
{

    public function index()
    {
        $category = new  CategoryModel;
        $categories = $category->all();
        
        return  $this->view('panel.category.index', compact('categories'));
    }

    public function create()
    {
        # code...
        return $this->view('panel.category.create');
    }


    public function store()
    {
        # code...
        $category = new  CategoryModel;
        $category->insert($_POST);
        return $this->redirect('category');
    }

    public function edit($id)
    {
        # code...
       
        $obj_category = new  CategoryModel;
        $category = $obj_category->find($id);
       
        return  $this->view('panel.category.edit', compact('category'));
    }

    public function update($id)
    {
        # code...

        $obj_category = new  CategoryModel;
        $obj_category->update($id, $_POST);
        return $this->redirect('category');
    }

    public function delete($id)
    {
        # code...
        $obj_category = new   CategoryModel;
        $obj_category->delete($id);
        return $this->redirectBack();
    }

    public function show($id)
    {
        # code...
        return $this->view('panel.category.create');
    }
}
