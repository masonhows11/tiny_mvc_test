<?php

namespace application\models;

class Article extends Model{

    public function all()
    {
        # code...

        $query  = "SELECT * FROM `articles`;";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
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