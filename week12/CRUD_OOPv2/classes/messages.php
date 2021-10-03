<?php
include_once "./classes/constants.php";

class Messages
{

    function print_msg($code = '')
    {
        if ($code === true) {
            echo "<div class='alert alert-success alert-dismissable'>";
            echo MSG_SUCCESS;
            echo "</div>";
        }
        if ($code === false) {
            echo "<div class='alert alert-danger alert-dismissable'>";
            echo MSG_FAILURE;
            echo "</div>";
        }
        if ($code === '') {
            echo "$code";
        }
    }
}