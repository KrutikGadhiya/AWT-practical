<?php

require_once('dbconfig.php');

$db = new Database("localhost", "rtest", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET['color'])) {

        $sql = "SELECT * FROM " . 'tbl_fruits' . " WHERE color = :color";
        $prep_state = $db->conn->prepare($sql);
        $prep_state->bindParam(":color", $_GET['color']);
        $prep_state->execute();
        $data = $prep_state->fetchAll(PDO::FETCH_ASSOC);

        // header('Access-Control-Allow-Origin: *');                   # CORS
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit();
    } else {


        $sql = "SELECT * FROM  tbl_fruits ";
        $prep_state = $db->conn->prepare($sql);

        $prep_state->execute();
        $data = $prep_state->fetchAll(PDO::FETCH_ASSOC);

        // header('Access-Control-Allow-Origin: *');                   # CORS
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id'])) {

        $sql = "SELECT * FROM " . 'tbl_fruits' . " WHERE id = :id";
        $prep_state = $db->conn->prepare($sql);
        $prep_state->bindParam(":id", $_POST['id']);
        $prep_state->execute();
        $data = $prep_state->fetchAll(PDO::FETCH_ASSOC);

        // header('Access-Control-Allow-Origin: *');                   # CORS
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit();
    }
    if (isset($_POST['fruit_name'])) {

        $sql = "SELECT * FROM " . 'tbl_fruits' . " WHERE fruit_name = :name";
        $prep_state = $db->conn->prepare($sql);
        $prep_state->bindParam(":name", $_POST['fruit_name']);
        $prep_state->execute();
        $data = $prep_state->fetchAll(PDO::FETCH_ASSOC);

        // header('Access-Control-Allow-Origin: *');                   # CORS
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit();
    }
} else {

    http_response_code(405);
}