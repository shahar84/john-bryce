<?php
include "../connection.php";
include "../functions.php";


$request_type = $_SERVER['REQUEST_METHOD'];
switch ($request_type) {
    case 'POST':
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
        break;
    case 'GET':
    default:

        $output = "";
        $page_title = "No Movie";
        $error_msg = filter_input(INPUT_GET, 'error');
        $success_msg = filter_input(INPUT_GET, 'success');;
        if ($error_msg) {
            $error_msg = "<div class='alert alert-danger'>Problem adding the movie!<br>$error_msg<br> Try again</div>";
        }

        if ($success_msg) {
            $success_msg = "<div class='alert alert-success'>The movie has been created successfully!</div>";
        }
        $output = "<div><a href='index.php'>Back to movies index</a></div>

        <div class='row edit-form'>
            $error_msg
            $success_msg
            <div class='col-md-12'>
                <form action='./add_movie.php' class='form' method='post'>
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
    break;
}
