<?php

include "connection.php";

$query_url = "https://api.themoviedb.org/3/search/multi?api_key=d272326e467344029e68e3c4ff0b4059&language=en-US&query=";
$image_base_url = "https://image.tmdb.org/t/p/w640";

$results = $mysqli->query("SELECT * FROM movies ORDER BY id");
$movies = array();
$failed = 0;
$success = 0;
while ($row = $results->fetch_assoc()) {
    $movies[] = $row;
    if (strlen($row['image_url']) > 1) {
        continue;
    }
    $data = file_get_contents($query_url . urlencode($row['name']));
    $data_json = json_decode($data, TRUE);
    $image_path = $image_base_url . $data_json['results'][0]['poster_path'];
    print_r(" " . $row['name'] . " " . $image_path);
    $id = $row['id'];
    $escape_image_path = $mysqli->real_escape_string($image_path);
    $result = $mysqli->query("UPDATE movies SET image_url='$escape_image_path' WHERE ID=$id");
    if ($result) {
        $success++;
        print ' - Success! record updated ' . "\n";
    } else {
        $failed++;
        print 'Error : (' . $mysqli->errno . ') ' . $mysqli->error;
    }
}
$movies_count = count($movies);
print_r("\n\n success: $success \n failed: $failed \n total: $movies_count");

//


//MySqli Delete Query
//$results = $mysqli->query("DELETE FROM products WHERE ID=24");
