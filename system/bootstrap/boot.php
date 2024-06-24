<?php 
// session start
session_start();

// add autoload
require_once ('system/bootstrap/autoload.php');
$autoload = new \system\bootstrap\Autoload();
$autoload->autoload();

// add config file
require_once('system/config.php');
// add routing file
$router = new \system\router\Routing();
$router->run();