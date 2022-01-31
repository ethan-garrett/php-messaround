<?php

/**
 * Checks if a user is logged in and displays a login/out button
 *
 * @param bool $loggedIn
 * @return string
 */
function loginButton(bool $loggedIn) : string {
    if ($loggedIn) {
        return '<a href="#">Logout</a>';
    }
    return '<a href="#">Login</a>';
}

