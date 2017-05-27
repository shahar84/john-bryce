<?php


$person1 = array(
    "name" => "Shahar",
    "status" => "married",
    "children" => 1
);

echo '<pre>', print_r($person1, true), '</pre>';


$child = array(
    "name" => "Yahli",
    "status" => "Single",
    "children" => 0
);

$person2 = array(
    "name" => "Shahar",
    "status" => "married",
    "children" => $child
);

echo '<pre>', print_r($person2, true), '</pre>';
