<?php

namespace application\models;

class Article extends Model
{

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
        $query  = "SELECT * , (SELECT `name` FROM `categories` WHERE `categories`.`id` = `articles`.`cat_id`) as `category` FROM `articles` WHERE id = ? ";
        $result = $this->query($query, [$id])->fetchAll();
        $this->closeConnection();
        return $result;
    }


    public function insert($values)
    {
        # code...
        $query  = "INSERT INTO `articles` (`title` , `cat_id` , `body` , created_at) VALUES (?,?,?,now())";
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values)
    {
        # code...
        $query  = "UPDATE `articles` SET `title` = ? , `cat_id` = ? , `body` = ?  , `updated_at` = now() , WHERE `id` = ? ";

        $this->execute($query, array_merge(array_values($values), [$id]));

        $this->closeConnection();
    }

    public function delete($id)
    {
        # code...

        $query  = "DELETE FROM `articles` WHERE `id` = ? ";

        $this->execute($query, [$id]);

        $this->closeConnection();
    }
}
