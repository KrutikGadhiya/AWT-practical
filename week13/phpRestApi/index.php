<?php
include_once('database.php');
const TBL_NAME = 'student';

switch ($_SERVER["REQUEST_METHOD"]) {
  case 'GET':
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $qry = "SELECT * FROM " . TBL_NAME . " WHERE id = :id";
      $prepQry = $conn->prepare($qry);
      $prepQry->execute([':id' => $id]);
      $res = $prepQry->fetch(PDO::FETCH_ASSOC);

      if (!$res) {
        http_response_code(404);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(["error" => "Invalid ID"]);
        exit();
      }

      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($res);
      exit();
    } else {
      http_response_code(203);
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode(["error" => "ID not found"]);
      exit();
    }
    break;

  case 'POST':
    // TODO: Post data route
    $body = file_get_contents('php://input');
    $bodyParsed = json_decode($body);
    // print_r($bodyParsed);
    if (isset($bodyParsed->id)) {
      $id = $bodyParsed->id;
      $qry = "SELECT * FROM " . TBL_NAME . " WHERE id = :id";
      $prepQry = $conn->prepare($qry);
      $prepQry->execute([':id' => $id]);
      $res = $prepQry->fetch(PDO::FETCH_ASSOC);

      $fname = isset($bodyParsed->firstName) ? $bodyParsed->firstName : $res['firstName'];
      $lname = isset($bodyParsed->lastName) ? $bodyParsed->lastName : $res['lastName'];
      $email = isset($bodyParsed->email) ? $bodyParsed->email : $res['email'];

      $query = 'UPDATE ' . TBL_NAME . ' SET firstName = :fname, lastName = :lname, email = :email WHERE id = :id';
      $res = $conn->prepare($query);
      if ($res->execute([':fname' => $fname, ':lname' => $lname, ':email' => $email, ':id' => $id])) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(["message" => "Success: Student with id: $id Updated Successfully :)"]);
      } else {
        http_response_code(500);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(["message" => "Some Error Occured :("]);
      }
      exit();
    } else {
      http_response_code(203);
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode(["error" => "ID not found"]);
      exit();
    }
    break;

  default:
    echo "Can not Process your Request!";
    break;
}
