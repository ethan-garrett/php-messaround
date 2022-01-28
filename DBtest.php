<?php
//save the conn in a variable
$db = new PDO('mysql:host=db; dbname=tennistourney', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//create the sql query to run
$query = $db->prepare("SELECT `Name`, `Elo` , `Country` FROM `tetris` ORDER BY `Country`;");
//$query->bindParam(':name', $name);
$query->execute();

//grab the results from the query that has been run
$result = $query->fetchAll();


foreach ($result as $resultsArray) {
    $name = $resultsArray['Name'];
    $elo = $resultsArray['Elo'];
    $country = $resultsArray['Country'];
    echo '<p>' . $name . ', their rank is ' . $elo .  ' and they are from '. $country . '</p>';
}