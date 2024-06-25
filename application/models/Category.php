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
        $query  = "SELECT * FROM  `articles` WHERE cat_id = ? ";
        $result = $this->query($query, [$cat_id])->fetchAll();
        $this->closeConnection();
        return $result;
    }


    public function find($id)
    {
        # code...
        $query  = "SELECT * FROM  `articles` WHERE id = ? ";
        $result = $this->query($query, [$id])->fetch();
        $this->closeConnection();
        return $result;
    }


    public function insert($values)
    {
        # code...
        $query  = "INSERT INTO `categories` (`name` , `description` , created_at) VALUES (?,?,now())";
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }

    public function update($id,$values)
    {
        # code...

        $query  = "UPDATE `categories` SET `name` = ? , `description` = ? , `updated_at` = now() , WHERE `id` = ? ";

        $this->execute($query, array_merge(array_values($values), [$id]));

        $this->closeConnection();
    }

    public function delete($id)
    {
        # code...

        $query  = "DELETE FROM `categories` WHERE `id` = ? ";

        $this->execute($query, [$id]);

        $this->closeConnection();
    }



}