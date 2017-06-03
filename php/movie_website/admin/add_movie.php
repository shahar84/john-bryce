<?php
include "../connection.php";
include "../functions.php";

$output = "";
$page_title = "No Movie";
$error_msg = "";
$success_msg = "";
if (isset($_GET['error'])) {
    $error_msg = "<div class='alert alert-danger'>Problem adding the movie! Try again</div>";
}

if (isset($_GET['success'])) {
    $success_msg = "<div class='alert alert-success'>The movie has been created successfully!</div>";
}
$output = "<div><a href='index.php'>Back to movies index</a></div>

<div class='row edit-form'>
    $error_msg
    $success_msg
    <div class='col-md-12'>
        <form action='./create_movie.php' class='form' method='post'>
             <div class='form-group'>
                <label for='name'>Movie Title</label>
                <input type='text' class='form-control' name='name' id='name' required placeholder='Django Unchained for example'>
             </div>      
             <div class='form-group'>
                <label for='year'>Movie Year</label>
                <input type='number' class='form-control' name='year' id='year' required placeholder='2014 for example'>
             </div>  
            <div class='form-group'>
                <label for='description'>Movie Description</label>
                <textarea class='form-control' rows='3' id='description' name='description'></textarea>
             </div>                                   
             <div class='form-group'>
                <label for='imdb_id'>IMDB ID</label>
                <input type='text' class='form-control' name='imdb_id' id='imdb_id'>
             </div>
             <div class='form-group'>                            
                <label for='image_url'>Poster URL</label>
                <input type='text' class='form-control' name='image_url' id='image_url' >
             </div>                                                                                                                                                                        
                                  
            <button type='submit' class='btn btn-default'>Create movie</button>
        </form>
    </div>
</div>";

echo body_wrapper($output, $page_title, '../');