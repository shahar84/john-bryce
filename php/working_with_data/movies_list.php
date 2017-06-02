<?php
include "connection.php";

$results = $mysqli->query("SELECT * FROM movies ORDER BY id");

$movies = array();
$output = "";


// Pay attention that we have replaced fetch_assoc() with fetch_object() function
while ($row = $results->fetch_object()) {
    $movies[] = $row;
    $output .= "<li><a href='movie_details.php?id=$row->id'> $row->name ($row->year)</a></li>";
}
$output = '<ul class="movies-list">' . $output . '</ul>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>IMDB from</title>
    <style>
        main {
            margin-top: 50px;
        }
    </style>

</head>

<body>
<main>
    <div class="container">
            <?php echo $output ;?>
    </div>
</main>
</body>
</html>
