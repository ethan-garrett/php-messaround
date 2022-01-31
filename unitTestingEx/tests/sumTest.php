<?php

// Gives us access to the function we're testing
require '../sum.php';

// Gives us access to PHPUnit
use PHPUnit\Framework\TestCase;

// This class is where our tests go
class SumTest extends TestCase {
    // Our success test
    public function testSuccessSum()
    {
        $expected = 6;
        $inputA = 3;
        $inputB = 3;
        $case = sum($inputA, $inputB);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedSum()
    {
        $inputA = [1];
        $inputB = [1];
        $this->expectException(TypeError::class);
        sum($inputA, $inputB);
    }
}