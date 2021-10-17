<?php
const DB_HOST_NAME = 'localhost';
const DB_NAME = 'security';
const DB_USER_NAME = 'root';
const DB_PASS = '';
const TBL = 'users';

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

  // function __construct()
  // {
  //   $this->connection = new mysqli(DB_HOST_NAME, DB_USER_NAME, DB_PASS, DB_NAME);
  // }

  function getConnection()
  {
    return $this->connection;
  }
}

$database = new Database();
$conn = $database->getConnection();

function login($uname, $pass)
{
  global $conn;
  // $qry = 'SELECT * from ' . TBL . ' WHERE uname=:uname';
  // $qry = 'SELECT * from ' . TBL . " WHERE uname=" . $uname . " and password=" . $pass;
  $qry = "SELECT * FROM " . TBL . " WHERE uname = '$uname' AND password = '$pass'";
  echo $qry;
  $prep = $conn->prepare($qry);
  // $prep->execute([':uname' => $uname]);
  $prep->execute();
  $res = $prep->fetch(PDO::FETCH_ASSOC);

  if (!$res) return false;
  // return $res;
  if ($pass === $res['password']) {
    return true;
  }
  return false;
}

// function login($uname, $pass)
// {
//   global $conn;
//   $qry = "SELECT * FROM " . TBL . " WHERE uname = '$uname' AND password = '$pass'";
//   $res = mysqli_query($conn, $qry);
//   $check = mysqli_fetch_array($res);

//   if (isset($check)) {
//     return true;
//   }
//   return false;
// }
