<?php

namespace application\models;

class Category extends Model{


    public function all()
    {
        # code...
        $query = "SELECT * FROM categories";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function articles($cat_id)
    {
        # code...
    }


    public function find($id)
    {
        # code...
    }


    public function insert($id)
    {
        # code...
    }

    public function update($id,$values)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }



}