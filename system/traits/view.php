<?php

namespace system\traits;


trait View
{


    protected function view(string $dir, $data  = null)
    {
        $dir = str_replace('.', '/', $dir);
        if ($data) {

            extract($data);
            $path = realpath(dirname(__FILE__) . "/../../application/views/" . $dir . ".php");
            if (\file_exists($dir)) {
                return require_once($path);
            } else {
                echo "the view [".$dir."] not found";
            }
        }
    }
}
