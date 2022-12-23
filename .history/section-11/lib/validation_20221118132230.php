<?php
function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (preg_match($pattern, $username, $matchs)) {
        return true;
    }
    return false;
}
function is_password($password)
{
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($pattern, $password, $matchs)) {
        return true;
    }
    return false;
}
function is_email($email)
{
    $pattern = "/^([\w_\.]){8-24}@([a-z_\.]{6-32})$/";
    if (preg_match($pattern, $email, $matchs)) {
        return true;
    }
    return false;
}
function form_error($name)
{
    global $error;
    if (!empty($error[$name])) {
        return "<p class='error'>" . $error[$name] . "</p>";
    }
}

function set_value($name)
{
    if (!empty($$name)) {
        return $$name;
    }
}
