<?php
include "../connection.php";

$name = filter_input(INPUT_POST, 'name');
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
$imdb_id = filter_input(INPUT_POST, 'imdb_id');
$image_url = filter_input(INPUT_POST, 'image_url');
$result = $mysqli->query("INSERT INTO movies
                                (name, year, description, image_url, imdb_id) VALUES 
                                ('$name',$year,'$description','$image_url','$imdb_id')");
if ($result === false) {
    $e = mysqli_error($mysqli);
    header("Location: add_movie.php?error=$e");
    die();
} else {
    $id = $mysqli->insert_id;
    header("Location: edit_movie.php?id=$id&success=create");
    die();
}