<?php
$surface = null;
$weather = null;
//save the conn in a variable
$db = new PDO('mysql:host=db; dbname=tennistourney', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//create the sql query to run
$query = $db->prepare("SELECT  `name`, `clay`, `lawn`, `hard`, `rain`, `dry`, `snow`, `sunny` FROM `tourneydata`;");
//$query->bindParam(':name', $name);
$query->execute();

//grab the results from the query that has been run
$result = $query->fetchAll();

shuffle($result);

$player1 = $result[0];
$player2 = $result[1];

function weather() {
    $weatherRand = rand(1,4);
    if ($weatherRand == 1) {
        return "rain";
    }
    elseif ($weatherRand == 2) {
        return "dry";
    }
    elseif ($weatherRand == 3) {
        return "snow";
    }
    elseif ($weatherRand == 4) {
        return "sunny";
    }
}

function surface() {
    $surfaceRand = rand(1,3);
    if  ($surfaceRand == 1) {
        return  "clay";
    }
    elseif ($surfaceRand == 2) {
        return "lawn";
    }
    elseif ($surfaceRand == 3) {
        return "hard";
    }
}

function game($player1, $player2) {
    $surface = surface();
    $weather = weather();

    $player1Score = $player1[$surface] * $player1[$weather];
    $player2Score = $player2[$surface] * $player2[$weather];
    echo $player1Score . '<br>';
    echo $player2Score . '<br>';

    if ($player1Score > $player2Score) {
        echo $player1['name'] . ' has beaten ' . $player2['name'];
    }
    elseif ($player1Score === $player2Score) {
        echo 'Draw repeat the match' . '<br>';
        game($player1, $player2);
    }
    else {
        echo $player2['name'] . ' has beaten ' . $player1['name'];
    }
}

game($player1, $player2, $surface, $weather );