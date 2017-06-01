<?php

function body_wrapper($output, $title = "Admin Panel")
{
    return "<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='./css/bootstrap.css'>
    <link rel='stylesheet' href='./css/style.css'>
    <script src='./script/jquery.js'></script>
    <title>$title</title>
</head>
<body>
<main>
    <div class='container'>
        $output
    </div>
</body>
</main>
</html>";
}


