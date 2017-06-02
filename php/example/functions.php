<?php
function body_wrapper($output, $title="Page title")
{
    return "<!doctype html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport'
              content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>$title</title>
        <link rel='stylesheet' href='css/bootstrap.css'>
        <link rel='stylesheet' href='css/style.css'>
        <script src='script/jquery.js'></script>
        <script src='script/script.js'></script>
    </head>
    <body>
        $output
    </body>
    </html>";
}


