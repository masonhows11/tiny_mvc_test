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

}