<?php
/**
 * From the array $temperatures try to find the following values:
 * 1) Top 3 hottest
 * 2) Top 3 coldest
 * 3) Average value
 *
 */

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62,
    73, 87, 72, 65, 74, 62, 62, 65, 43, 64, 68, 73, 75, 79, 73];

function max_count($array, $count = 3)
{
    asort($array);
    $offset = $count * -1;
    return array_slice($array, $offset);
}

function min_count($array, $count = 3)
{
    asort($array);
    return array_slice($array, 0, $count);
}

function average($array)
{
    $len = count($array);
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / $len;
}

function average_built_in($array)
{
    return array_sum($array) / count($array);
}

 

