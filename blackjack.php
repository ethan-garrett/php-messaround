<?php
$cardDeck = [1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,6,6,6,6,7,7,7,7,8,8,8,8,9,9,9,9,10,10,10,10,
    'j', 'j', 'j', 'j', 'q', 'q', 'q', 'q', 'k', 'k', 'k', 'k', 'a', 'a', 'a', 'a'];

$i = 0;

function cardPickHouse(array $cardDeck): int {
    $cardHouse = $cardDeck[0];
    echo $cardHouse;
    if ($cardHouse === 'j' || 'q' || 'k') {
        echo $cardHouse;
        $cardHouse = 10;
    }
    elseif ($cardHouse == 'a'){
        $cardHouse = 11;
    }
    array_splice($cardDeck, 0, 1);
    return $cardHouse;
}

while ($i < 4) {
    shuffle($cardDeck);
    $houseResult =cardPickHouse($cardDeck);
    echo $houseResult;
    echo '<br>';
    $i++;
}
