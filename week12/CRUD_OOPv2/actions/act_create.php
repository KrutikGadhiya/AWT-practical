<?php
include_once '../classes/sessions.php';
include_once "../classes/constants.php";

// check if the form is submitted
if ($_POST) {

    // instantiate user object
    include_once '../classes/user.php';
    include_once '../classes/database.php';
    include_once '../initial.php';

    $user = new User($db);
    $session = new session_data();

    // set user property values
    $user->firstname = htmlentities(trim($_POST['firstname']));
    $user->lastname = htmlentities(trim($_POST['lastname']));
    $user->email = htmlentities(trim($_POST['email']));
    $user->mobile = htmlentities(trim($_POST['mobile']));

    // check and print msg ...
    if ($user->create()) {
        $session->set("err_code", true);
    } else {
        $session->set("err_code", false);
    }

    header("location:../index.php");
    exit();
}