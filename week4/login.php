<?php

$_SESSION['username'] = $_GET['username'];
$_SESSION['password'] = $_GET['password'];
if (isset($_SESSION['username'])) {
    echo 'You are logged in' . '<br>';
    $_SESSION['login'] = true;

} else {
    header('Location: index.php');
    $_SESSION['login'] = false;
}


var_dump($_SESSION);