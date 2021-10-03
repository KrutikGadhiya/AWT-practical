<?php

include_once '../classes/sessions.php';
include_once "../classes/constants.php";

if ($_GET['id']) {

    // instantiate user object
    include_once '../classes/user.php';
    include_once '../classes/database.php';
    include_once '../initial.php';

    $user = new User($db);
    $session = new session_data();

    $id = $_GET['id'];

    // check and print msg ...
    if ($user->delete($id)) {
        $session->set("err_code", true);
    } else {
        $session->set("err_code", false);
    }

    header("location:../index.php");
    exit();
}