<?php
include "../connection.php";

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$result = $mysqli->query("DELETE FROM movies WHERE id=$id");
if ($result === false) {
    $e = mysqli_error($mysqli);
    header("Location: edit_movie.php?id=$id&error=$e");
    die();
} else {
    header("Location: index.php?success=delete");
    die();
}