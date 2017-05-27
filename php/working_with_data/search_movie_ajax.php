<?php

include "connection.php";
header('Content-Type: application/json');
$movies = [];



if (isset($_GET['name'])) {
    $name = mysqli_real_escape_string($mysqli, $_GET['name']);
    $results = $mysqli->query("SELECT * FROM movies WHERE 
                              name LIKE '%$name%'  OR  imdb_id='$name' ORDER BY name");
    $output = "";
    while ($movie = $results->fetch_object()) {
        $movies[] = $movie;
    }
}

echo json_encode(array("response" => $movies));


