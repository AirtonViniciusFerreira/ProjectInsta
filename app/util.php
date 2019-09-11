<?php

    function fromSession($param){
        $value = "";
        if (!isset($_SESSION))
            session_start();
        if (isset($_SESSION[$param])){
            $value = $_SESSION[$param];
            unset($_SESSION[$param]);
        }
        return $value;
    }

    function fromPost($var){
        if (isset($_POST[$var]))
            return sanitize_unsafe($_POST[$var]);
    }

    function fromGet($var){
        if (isset($_GET[$var]))
            return sanitize_unsafe($_GET[$var]);
    }

    function toSession($key, $value){
        session_start();
        $_SESSION[$key] = $value;
      }

    function sanitize_unsafe($value) {
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
        return str_replace($search, $replace, $value);
     }

    
 ?>
