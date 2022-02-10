<?php
require_once 'functions.php';

if (isset($_POST['railings']))
{
    $input = $_POST['railings'];
    echo distanceCalculation($input);
}

if (isset($_POST['distance']))
{
    $inputDistance = floatval($_POST['distance']);
    echo railingsPostsCalculation($inputDistance);
}
