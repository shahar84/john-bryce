<?php

include "connection.php";
include "functions.php";
$results = $mysqli->query("SELECT * FROM movies ORDER BY year DESC");

$output = "";
 while ($movie = $results->fetch_object()) {

    $thumb = str_replace('w640', 'w300', $movie->image_url);
//    $thumb =$movie->image_url;
    $output .= "<li><a href='movie_view.php?id=$movie->id' title='$movie->name page'>
                <img src='$thumb' onerror='imgError(this);' alt='$movie->name'></a></li>";
}
$output = "<div class='movies-index'> 
                    <h1 class='headline'>The best movie website in the world!</h1>
                    <ul>$output</ul>        
            </div>";
//echo $output;


echo body_wrapper($output, 'Movies index page');