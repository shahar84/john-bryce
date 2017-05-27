<?php

include "connection.php";

$results = $mysqli->query("SELECT * FROM movies ORDER BY year DESC");

$output = "";

while ($movie = $results->fetch_object()) {
    $output .= "<li><a href='movie_view.php?id=$movie->id' title='$movie->name page'>$movie->name</a></li>";
}
$output = "<ol>$output</ol>";
echo $output;