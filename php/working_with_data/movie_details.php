<?php
include "../database/connection.php";
$output = "";

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM movies WHERE id=$movie_id");
    if ($result->num_rows > 0) {
        $movie = $result->fetch_object();
        $output = "<div><a href='movies_list.php'>Back to movies list</a></div>
                    <div class='movie row'>
                        <div class='col-md-6'>
                            <h2>$movie->name ($movie->year) </h2>
                            <p>$movie->description</p>
                            <a target='_blank' href='http://www.imdb.com/title/$movie->imdb_id/'>IMDB link</a>
                        </div>
                        <div class='col-md-6'>
                            <img class='poster' src='$movie->image_url'>                            
                        </div>
                       
                    </div>";
    } else {
        $output = "<h2>No Movie with ID $movie_id</h2>";
    }
} else {
    $output = "<h2>No Movie ID where supplied</h2>";
}
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

        .movie {
            margin:auto;
            max-width: 600px;
        }

        .movie img {
            max-width: 300px;
        }
    </style>

</head>

<body>
<main>
    
    <div class="container">
        <?php echo $output; ?>
    </div>
</main>
</body>
</html>
