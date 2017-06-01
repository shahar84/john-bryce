<?php

include "../connection.php";
include "functions.php";
$results = $mysqli->query("SELECT * FROM movies ORDER BY year DESC");

$output = "";

while ($movie = $results->fetch_object()) {
    $output .= "<li><a href='./edit_movie.php?id=$movie->id' title='$movie->name page'>$movie->name</a></li>";
}
$output = "<ol>$output</ol>";

echo body_wrapper($output, "Movies list");


