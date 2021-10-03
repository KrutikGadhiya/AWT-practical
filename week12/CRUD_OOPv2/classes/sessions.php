<?php

session_start();

class session_data
{

    function set($name, $data)
    {
        $_SESSION["$name"] = $data;
    }

    function get($name = '')
    {

        if (trim($name) == '') {
            $data = '';
        }
        $data = @$_SESSION["$name"];
        return $data;
    }

    function reset($name)
    {
        if (trim($name) == '') {
            @$_SESSION[] = '';
        }

        @$_SESSION["$name"] = '';
    }
}