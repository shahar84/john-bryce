<?php
include "connection.php";

$results = $mysqli->query("SELECT * FROM movies ORDER BY id");

$movies = array();
$output = "";


// Pay attention that we have replaced fetch_assoc() with fetch_object() function
while ($row = $results->fetch_object()) {
    $movies[] = $row;
    $output .= "<div class='movie'>
                    <h2>$row->name ($row->year) </h2>
                    <p>$row->description</p>
                    <img src='$row->image_url'>
                </div>";
}
// Free the memory
$results->free();
//print_r($movies);
echo $output;

