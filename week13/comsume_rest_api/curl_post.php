<?php

$ch = curl_init();

$data = array("id" => 2);

$q_str = http_build_query($data);

curl_setopt($ch, CURLOPT_URL, "http://localhost:8090/rest_api_demo/API_Server/d1/index.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $q_str);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

var_dump($server_output);