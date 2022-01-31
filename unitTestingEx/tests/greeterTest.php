<?php

require '../greeter.php';

use PHPUnit\Framework\TestCase;

class greeterTest extends TestCase {
    public function testSuccessGreeterFirstName() {
        $expected = 'Welcome back Ethan';
        $firstName = 'Ethan';
        $case = greeter($firstName);
        $this->assertEquals($expected, $case);
    }
    public function testSuccessGreeterLastName() {
        $expected = 'Hello Ethan Garrett';
        $firstName = 'Ethan';
        $lastName = 'Garrett';
        $case = greeter($firstName, $lastName);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedGreeter() {
        $firstName = 12;
        $lastName = ['Ethan'];
        $this->expectException(TypeError::class);
        greeter($firstName, $lastName);
    }
}