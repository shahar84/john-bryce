<?php
include "../connection.php";

$id = (int)$mysqli->real_escape_string($_POST['id']);
$name = $mysqli->real_escape_string($_POST['name']);
$year = (int)$mysqli->real_escape_string($_POST['year']);
$description = $mysqli->real_escape_string($_POST['description']);
$imdb_id = $mysqli->real_escape_string($_POST['imdb_id']);
$image_url = $mysqli->real_escape_string($_POST['image_url']);

$result = $mysqli->query("UPDATE movies
                                SET name='$name',
                                year=$year,
                                description='$description',
                                imdb_id='$imdb_id',
                                image_url='$image_url'
                                WHERE id=$id");

if ( $result === false) {
    header("Location: edit_movie.php?id=$id&error=true");
    die();
}else{
    header("Location: edit_movie.php?id=$id&success=true");
    die();
}