<?php
include "../connection.php";
include "../functions.php";

$output = "";
$page_title = "No Movie";
$error_msg = "";
$success_msg = "";
if (isset($_GET['error'])) {
    $error_msg = "<div class='alert alert-danger'>Problem updating the movie! Try again</div>";
}

if (isset($_GET['success'])) {
    $success_msg = "<div class='alert alert-success'>The movie has been updated successfully!</div>";
}
$movie_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($movie_id) {
    $result = $mysqli->query("SELECT * FROM movies WHERE id=$movie_id");
    if ($result->num_rows > 0) {
        $movie = $result->fetch_object();
        $page_title = "Edit movie: $movie->name";
        $output = "<div><a href='index.php'>Back to movies index</a></div>
                
               <div>
                    <form action='./delete_movie.php' method='post' >
                        <input type='hidden' name='id' value='$movie_id'>
                        <button type='submit' class='btn btn-danger pull-right' onclick=\"return confirm('Are you sure you want to delete  $movie->name?')\">Delete movie</button>
                    </form>
               </div>

                <div class='row edit-form'>
                    $error_msg
                    $success_msg
                    <div class='col-md-12'>
                        <form action='./update_movie.php' class='form' method='post'>
                            <input type='hidden' value='$movie_id' name='id'>  
                             <div class='form-group'>
                                <label for='name'>Movie Title</label>
                                <input type='text' class='form-control' name='name' id='name' value='$movie->name' placeholder='Django Unchained for example'>
                             </div>      
                             <div class='form-group'>
                                <label for='year'>Movie Year</label>
                                <input type='number' class='form-control' name='year' id='year' value='$movie->year' placeholder='2014 for example'>
                             </div>  
                            <div class='form-group'>
                                <label for='description'>Movie Description</label>
                                <textarea class='form-control' rows='3' id='description' name='description'>$movie->description</textarea>
                             </div>                                   
                             <div class='form-group'>
                                <label for='imdb_id'>IMDB ID</label>
                                <input type='text' class='form-control' name='imdb_id' id='imdb_id' value='$movie->imdb_id'>
                             </div>
                             <div class='form-group'>                            
                                <label for='image_url'>Poster URL</label>
                                <input type='text' class='form-control' name='image_url' id='image_url' value='$movie->image_url'>
                             </div>                                                                                                                                                                        
                                                  
                            <button type='submit' class='btn btn-default'>Update movie</button>
                        </form>
                    </div>
                </div>




                    <div class='movie row'>
                        <div class='col-md-6'>
                            <h2 id='movie-name'>$movie->name ($movie->year) </h2>
                            <p id='movie-description'>" . nl2br($movie->description) . "</p>
                            <a target='_blank' href='http://www.imdb.com/title/$movie->imdb_id/' id='imdb-link'>IMDB link</a>
                        </div>
                        <div class='col-md-6'>
                            <img class='poster' src='$movie->image_url' id='movie-poster'>                            
                        </div>                       
                    </div>";
    } else {
        $output = "<h2>No Movie with ID $movie_id</h2>";
    }
} else {
    $output = "<h2>No Movie ID where supplied</h2>";
}

echo body_wrapper($output, $page_title, '../');