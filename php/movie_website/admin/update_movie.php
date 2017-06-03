<?php
include "../connection.php";

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description' ,FILTER_SANITIZE_SPECIAL_CHARS);
$imdb_id = filter_input(INPUT_POST,'imdb_id');
$image_url = filter_input(INPUT_POST, 'image_url');

$result = $mysqli->query("UPDATE movies
                                SET name='$name',
                                year=$year,
                                description='$description',
                                imdb_id='$imdb_id',
                                image_url='$image_url'
                                WHERE id=$id");

if ($result === false) {
    header("Location: edit_movie.php?id=$id&error=true");
    die();
} else {
    header("Location: edit_movie.php?id=$id&success=true");
    die();
}