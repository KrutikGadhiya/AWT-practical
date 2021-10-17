<?php
include_once('database.php');

if (isset($_POST['login'])) {
  if (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $loginAttempt = login($uname, $pass);
    // print_r($loginAttempt);
    if ($loginAttempt) {
      echo "<h1>Signed In Success!!</h1>";
    } else {
      echo "<h1>Signed In Failed</h1>";
    }
  }
}
