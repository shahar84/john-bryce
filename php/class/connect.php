<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'disney';

$mysqli = new mysqli($host, $username, $password, $db_name);

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}





$results = $mysqli->query("SELECT * FROM movies");
echo '<ul>';
while ($movie = $results->fetch_object()) {
    echo "<li>$movie->name ($movie->release_date)</li>";
    }
echo '</ul>';
