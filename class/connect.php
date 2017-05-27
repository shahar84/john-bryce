<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'disney';

$mysqli = new mysqli($host, $username, $password, $db_name);

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");