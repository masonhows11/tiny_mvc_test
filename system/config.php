<?php


// define base url path
// $base_url = "http://tinymvc.test/tinymvc/";
$base_url = "http://tinymvc.test";
// define base dir path
$base_dir = "/tinymvc/";
// tmp current route
$tmp = explode('?',$_SERVER['REQUEST_URI']);
// current route
$current_route = str_replace($base_dir,'',$tmp[0]);

unset($tmp);