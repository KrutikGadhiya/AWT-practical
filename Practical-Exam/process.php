<?php

include('./database.php');

if (isset($_POST['submit'])) {
  print_r($_POST);
  if ($_POST['name'] == '' || $_POST['subject'] == '' || $_POST['CGPA'] == '' || $_POST['department'] == '') {
    echo "Please add all the fields";
    header("location: index.php?msg='Please add all the fields'");
    die();
  } else {
    $database->addStudent($_POST['name'], $_POST['subject'], $_POST['CGPA'], $_POST['department']);
    header("location: index.php?msg='Success'");
  }
  // $database->addStudent('krutik', 'OS', '9.99', 'IT');
}
