<?php

include "connection.php";
$output = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM movies WHERE id=$id");
    if ($result->num_rows > 0) {
        $movie = $result->fetch_object();
        $output = "
                    <a href='index.php' title='Go to movies list'>Movies list</a>
                    <div class='movie'>
                            <h2>$movie->name ($movie->year) </h2>
                            <p>$movie->description</p>
                            <p><a href='http://www.imdb.com/title/$movie->imdb_id/' target='_blank'>IMDB link</a>   </p>
                            
                            <img class='poster' src='$movie->image_url' alt='$movie->name'>
                    </div>";
    } else {
        $output = "<h2>No Movie with ID $id</h2>";
    }
} else {
    $output = "<h2>No Movie ID was supplied</h2>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo $output; ?>
</body>
</html>

