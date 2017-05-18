<?php
include "connection.php";

$results = $mysqli->query("SELECT * FROM movies ORDER BY id");

$movies = array();
while ($row = $results->fetch_assoc()) {
    $movies[] = $row;
}
// Free the memory
$results->free();
print_r($movies);

