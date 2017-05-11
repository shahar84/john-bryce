<?php

$link = mysqli_connect("localhost", "root", "root", "imdb");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//$sql = "INSERT INTO movies (name, year, description, imdb_id)
//VALUES ('John', 2014, 'test', '123sdfa')";
//
//if (mysqli_query($link, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($link);
//}

//
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$json = file_get_contents("./list.json");
$jsonIterator = json_decode($json, TRUE);
$url = "http://www.omdbapi.com/?i=";
foreach ($jsonIterator as $key => $val) {
    if (!is_array($val)){
        continue;
    }
//    echo $val['title']."\n";
//    echo $val['id']."\n";
    $omdb_url = $url . $val['id'];
    $data = file_get_contents($omdb_url);
    $data_json = json_decode($data, TRUE);
    $title = $data_json['Title'];
    $year = $data_json['Year'];
    $description = $data_json['Plot'];
    $imdb_id = $data_json['imdbID'];
    $sql = "INSERT INTO movies (name, year, description, imdb_id) VALUES ('$title', '$year', '$description', '$imdb_id')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
