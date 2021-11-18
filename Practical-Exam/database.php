<?php
const TABLE_NAME = 'student';
const HOST = 'localhost';
const DB_NAME = 'practical-exam';
const DB_USER = 'root';
const DB_PASS = '';
$url = "mysql:host=" . HOST . ";dbname=" . DB_NAME;

class Database
{
  var $conn;

  function __construct($url)
  {
    try {
      $this->conn = new PDO($url, DB_USER, DB_PASS);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  function getStudentList()
  {
    $qry = 'SELECT * from ' . TABLE_NAME;
    $res = $this->conn->prepare($qry);
    $res->execute();
    $students = $res->fetchAll(PDO::FETCH_ASSOC);

    return $students;
  }
  function addStudent($name, $sub, $cgpa, $dep)
  {
    $qry = 'INSERT INTO ' . TABLE_NAME . ' (fullname, sub, cgpa, department) VALUES (:name, :sub, :cgpa, :dep)';
    $res = $this->conn->prepare($qry);

    if ($res->execute([':name' => $name, ':sub' => $sub, ':cgpa' => $cgpa, ':dep' => $dep])) {
      return true;
    }
    return false;
  }
}


$database = new Database($url);
