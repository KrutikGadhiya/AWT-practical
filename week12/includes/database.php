<?php

include('constants.php');

class Database
{
  var $connection;

  function __construct()
  {
    $dsn = "mysql:host=" . DB_HOST_NAME . ";dbname=" . DB_NAME;
    try {
      $this->connection = new PDO($dsn, DB_USER_NAME, DB_PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

$database = new Database();
