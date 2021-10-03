<?php
include('database.php');

class Student
{
  var $dbConnection;

  function __construct($db)
  {
    $this->dbConnection = $db;
  }

  function addStudent($fname, $lname, $email)
  {
    $query = 'INSERT INTO ' . TBL_USERS . ' (firstName, lastName, email) VALUES (:fname, :lname, :email)';
    $result = $this->dbConnection->connection->prepare($query);
    if ($result->execute([':fname' => $fname, ':lname' => $lname, ':email' => $email])) {
      return true;
    } else {
      return false;
    }
  }

  function updateStudent($id, $fname, $lname, $email)
  {
    $query = 'UPDATE ' . TBL_USERS . ' SET firstName = :fname, lastName = :lname, email = :email WHERE id = :id';
    $result = $this->dbConnection->connection->prepare($query);
    if ($result->execute([':fname' => $fname, ':lname' => $lname, ':email' => $email, ':id' => $id])) {
      return true;
    } else {
      return false;
    }
  }

  function getStudentList()
  {
    $query = 'SELECT * FROM ' . TBL_USERS;
    $result = $this->dbConnection->connection->prepare($query);
    $result->execute();

    return $result->fetchAll();
  }

  function getStudent($id)
  {
    $query = 'SELECT firstName, lastName, email FROM ' . TBL_USERS . ' WHERE id = :id';
    $result = $this->dbConnection->connection->prepare($query);
    $result->execute([':id' => $id]);
    $student = $result->fetch(PDO::FETCH_ASSOC);

    return $student;
  }

  function deleteUser($id)
  {
    $query = 'DELETE FROM ' . TBL_USERS . ' WHERE id = :id';
    $result = $this->dbConnection->connection->prepare($query);

    if ($result->execute([':id' => $id])) {
      return true;
    } else {
      return false;
    }
  }
}

$student = new Student($database);
