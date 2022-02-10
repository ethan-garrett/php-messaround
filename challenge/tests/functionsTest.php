<?php

use PHPUnit\Framework\TestCase;

require '../functions.php';

class functionsTest extends TestCase
{
    public function testSuccessDistanceCalculation(): void
    {
        $expected = 'Fence will be ' . '24.1' . 'm long';
        $input = 15;
        $case = distanceCalculation($input);
        $this-> assertEquals($expected, $case);
    }

    public function testMalformedDistanceCalculation()
    {
        $input = 'asdf';
        $this->expectException(TypeError::class);
        railingsPostsCalculation($input);
    }

    public function testSuccessRailingsPostsCalculation(): void
    {
        $expected = 'This fence requires ' . '15' . ' railings and ' . '16' . ' posts';
        $input = '24.1';
        $case = railingsPostsCalculation($input);
        $this-> assertEquals($expected, $case);
    }

    public function testMalformedRailingsPostsCalculation()
    {
        $input = 'asdf';
        $this->expectException(TypeError::class);
        railingsPostsCalculation($input);
    }
}