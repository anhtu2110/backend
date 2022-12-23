<?php
function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (preg_match($pattern, $username, $matchs)) {
        return true;
    } else {
        return false;
    }
}
function is_password($password)
{
    $pattern = "/^[\w_\.!@#$%^&*()]{6,32}$/";
    if (preg_match($pattern, $password, $matchs)) {
        return true;
    } else {
        return false;
    }
}
