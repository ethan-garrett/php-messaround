<?php


/**
 * Creates a welcome message
 *
 * @param string $firstName
 * @param string $lastName
 *
 * @return string
 */
function greeter(string $firstName, string $lastName = '') : string {
    if (!$lastName) {
        return "Welcome back $firstName";
    }
    return "Hello $firstName $lastName";
}
