<?php

namespace system\traits;


trait View
{

    protected function view($dir, $data  = null)
    {

        $dir = str_replace('.', '/', $dir);

        if ($data)
            extract($data);

        $path = realpath(dirname(__FILE__) . "/../../application/views/" . $dir . ".php");
        if (file_exists($path)) {
            return require_once($path);
        } else {
            echo "the view [" . $dir . "] not found";
        }
    }


    protected function asset($dir)
    {
        global $base_url;
        $path = $base_url . "pubic/" . $dir;
        echo $path;
    }

    protected function include($dir, $data  = null)
    {

        $dir = str_replace('.', '/', $dir);
        if ($data)
            extract($data);

        $path = realpath(dirname(__FILE__) . "/../../application/views/" . $dir . ".php");
        if (file_exists($path)) {
            return require_once($path);
        } else {
            echo "the view [" . $dir . "] not found";
        }
    }


    protected function url($url)
    {
        if ($url[0] == '/') {
            // delete slash "/" from start url
            $url = substr($url, 1, strlen($url) - 1);
        }
        global $base_dir;
        
        echo $base_dir.$url;
    }
}
