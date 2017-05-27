<?php








include "connection.php";

header('Content-Type: application/json');

$results = $mysqli->query("SELECT * FROM movies ORDER BY year DESC");
$output = [];

while ($movie = $results->fetch_object()) {
    $output[]=$movie;
}

echo json_encode(array('response'=>$output));