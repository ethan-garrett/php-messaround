<?php
session_start();

if ($_SESSION['login'] == true) {
    header('Location: login.php');
}

var_dump($_SESSION);
?>
<form action="login.php" method="get">
    <input type="text" name="username" />
    <input type="password" name="password" />
    <input type="submit" />
</form>
