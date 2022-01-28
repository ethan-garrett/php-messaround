<?php
$name = 'Sourdough';
//save the conn in a variable
$db = new PDO('mysql:host=db; dbname=komodo-dragons', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//create the sql query to run
$query = $db->prepare("INSERT INTO `crackers` (`name`) VALUES (:name);");
$query->bindParam(':name', $name);
//$query->execute();

//grab the results from the query that has been run
//$result = $query->fetchAll();

//echo '<pre>';
//var_dump($result);
//echo '</pre>';