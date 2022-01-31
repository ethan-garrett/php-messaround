<?php

require '../loginButton.php';

use PHPUnit\Framework\TestCase;

class loginButtonTest extends TestCase {
    public function testSuccessLoginTrue() {
        $expected = '<a href="#">Logout</a>';
        $login = true;
        $case = loginButton($login);
        $this->assertEquals($expected, $case);
    }
    public function testSuccessLoginFalse() {
        $expected = '<a href="#">Login</a>';
        $login = false;
        $case = loginButton($login);
        $this->assertEquals($expected, $case);
    }
}