<?php
include "../lib/global_functions.php";
include "../database/connection.php";
header('Content-Type: application/json; Charset=UTF-8');

$data = get_post_body();
$result = false;
if (isset($data['name']) && isset($data['year'])) {
    $name = $mysqli->real_escape_string($data['name']);
    $year = $mysqli->real_escape_string($data['year']);
    $result = $mysqli->query("INSERT INTO movies (name, year) VALUES ('$name', $year)");
}

$response = ['response'=>$result];
echo json_encode($response);


