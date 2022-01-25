<?php
$arrays = [1,2,3,4,5,6,7,8];

$arrays[] = 9;
array_push($arrays, 10);
echo '<pre>';
var_dump($arrays);
echo '</pre>';

shuffle($arrays);
echo '<pre>';
var_dump($arrays);
echo '</pre>';

foreach ($arrays as $array) {
    if ($array % 2 !== 0 ) {
        echo $array;
    }
}