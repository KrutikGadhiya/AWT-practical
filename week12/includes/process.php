<?php
include('session.php');
include('students.php');

if (isset($_POST['addStudent'])) {
  if (isset($_POST['fname']) && $_POST['lname'] && $_POST['email']) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);

    if ($student->addStudent($fname, $lname, $email)) {
      $session->setError("err_code", true);
      header('location:../index.php');
    }
  } else {
    $session->setError("err_code", false);
    // TODO: show error -> please add all the fields
  }
}

if (isset($_POST['updateStudent'])) {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    if ($student->updateStudent($id, $fname, $lname, $email)) {
      $session->setError("err_code", true);
      header('location:../allStudents.php');
    } else {
      // TODO: some error
      $session->setError("err_code", false);
    }
  } else {
    // TODO: show error -> id not found
    $session->setError("err_code", false);
  }
}

if (isset($_GET['delId'])) {
  $id = $_GET['delId'];
  if ($student->deleteUser($id)) {
    $session->setError("err_code", true);
    header('location: ../allStudents.php');
  } else {
    // TODO: some error
    $session->setError("err_code", false);
  }
}
