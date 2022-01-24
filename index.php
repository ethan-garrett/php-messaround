<?php

$randomNumber =  rand(1,100);
$randomImage = rand(1,10);

if ($randomNumber > 50 && $randomNumber < 99) {
    if ($randomImage > 5) {
        echo '<img src="head.jpeg" alt="icon" />';
    } else {
        echo '<img src="head2.png" alt="icon" />';
    }
} elseif ($randomNumber === 100) {
    if ($randomImage > 5) {
        echo '<img src="bigwin1.jpeg" alt="icon" />';
    } else {
        echo '<img src="bigwin2.jpeg" alt="icon" />';
    }
} else {
    if ($randomImage > 5) {
        echo '<img src="tails.png" alt="icon" />';
    } else {
        echo '<img src="tails2.jpeg" alt="icon" />';
    }
}