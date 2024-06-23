<?php

namespace system\traits;


trait Redirect{

    protected function redirect($url){

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        header("Location: ".$protocol.$_SERVER['HTTP_HOST']."/tinymvc/".$url);

    }


}