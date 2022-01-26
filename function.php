<?php

$num1 = 2;
$num2 = 8;


/**
 * Takes an integer, squares it , then adds a second integer
 *
 * @param $num1 int the number being squared
 * @param $num2 int the number added to num1 squared
 * @return int result of num1 squared added to num2
 */

/*function squareAdd (int $num1 , int $num2 = 0): int {
    $squared = $num1 * $num1;
    $squared += $num2;
    return $squared;
}
*/
$names = 'Alice,Oliver,Robbie,Mike,Audrey,Anton,Lucy,Charlie,Chris';

function removeA(string $names): string {
    $namesArray = explode(",", $names);
    $newNames = [];

    foreach ($namesArray as $name) {
        if (substr($name, 0, 1) !=='A') {
            $newNames[] = $name;
        }
    }
    $results = implode(',', $newNames);
    return $results;
}

var_dump(removeA($names));