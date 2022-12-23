<?php
function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.\s]{6-32}$/";
    if (preg_match($pattern, $username, $matchs)) {
        return true;
    }
    return false;
}

function is_password($password)
{
    $pattern = "/^([A-Z]{1})([\w_\.!@#$%^&*()]{5,31})+$/";
    if (preg_match($pattern, $password, $matchs)) {
        return true;
    } else {
        return false;
    }
}
function is_num_phone($num_phone)
{
    $pattern = "/^([0-9]){8-29}+$/";
    if (preg_match($pattern, $num_phone, $matchs)) {
        return true;
    } else {
        return false;
    }
}
function form_error($name)
{
    global $error;
    if (!empty($error[$name])) {
        return "<p>" . $error[$name] . "</p>";
    }
}
