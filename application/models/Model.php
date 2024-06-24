<?php

namespace application\models;


use PDO;
use PDOException;

class Model{

    protected $connection;

    public function __construct()
    {
        
        if(isset($connection))
        {
            // connect database info
            global $dbHost,$dbName,$dbUserName,$dbPassword;

            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

           try {
          
            // connect database connection
            $this->connection = new PDO("mysql:host=" . $dbHost .";dbname=" . $dbName, $dbUserName, $dbPassword , $options);

           } catch (PDOException $ex) {
           
            echo " Could not connect to database: " . $ex->getMessage();
            
           }               
        }

    }



    protected function query($query , $values = null)
    {
        try {

            if($values == null)
            {
                return $this->connection->query($query);

            } else {

                $stm = $this->connection->prepare($query);
                $stm->execute($values);
                return $stm;
            }
            
        } catch ( PDOException $ex) {
            
            echo " Could not execute statement database: " . $ex->getMessage();
        }
    }


    protected function execute($query , $values = null)
    {

        try {

            if($values == null)
            {
                return $this->connection->exec($query);

            } else {

                $stm = $this->connection->prepare($query);
                $stm->execute($values);
            }
            return true;
            
        } catch ( PDOException $ex) {
            
            echo " Could not execute statement database: " . $ex->getMessage();
            return false;
        }

    }

}