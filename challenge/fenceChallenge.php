<?php
$input = 112;
$inputDistance = 1347;


function distanceCalculation(int $input) : string
{
    $distance = (1.6 * $input)+0.1;
    return 'Fence will be ' . $distance . 'm long';
}

function railingsPostsCalculation(float $inputDistance): string
{
    $railings = ceil((($inputDistance - 0.1) / 1.6));
    $posts = $railings + 1;

    return 'This fence requires ' . $railings . ' railings and ' . $posts . ' posts';
}

echo distanceCalculation($input);
echo '<br>';
echo railingsPostsCalculation($inputDistance);