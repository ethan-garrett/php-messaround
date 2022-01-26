<?php
/*$dogs = ['Oreo','Ada','Shadow','Lassie','Ace',];

foreach ($dogs as $dog) {
    echo "<p>The dogs name is $dog </p>";
    echo '<br>';
}
*/

/*$num1 = 3098765432;
$num2 = 201234567;

function multiplier(int $num1, $num2): int {
    return $num1 * $num2;
}

$result = multiplier($num1, $num2);
echo $result;
*/

$fruitList = "Apple,Banana,Orange,Watermelon,Kiwi";
$fruitArray = explode(",", $fruitList, $limit = 3);

foreach ($fruitArray as $fruitItem) {
    echo $fruitItem;
}