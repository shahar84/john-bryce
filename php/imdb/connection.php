<?php
$mysqli = new mysqli("localhost", "root", "root", "imdb");

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}