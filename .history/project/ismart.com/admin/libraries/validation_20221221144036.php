<?php
function is_username($username)
{
    $pattern = "/^[\w\s_\.]{6,32}+$/";
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
function is_email($email)
{
    $pattern = "/^([\w_\.]){8,24}@([a-z_\.]{6,32})$/";
    if (preg_match($pattern, $email, $matchs)) {
        return true;
    }
    return false;
}
function is_num_phone($num_phone)
{
    $pattern = "/^([0-9]){8,20}+$/";
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
        return "<p class = 'error' style='color: red;'><i class='fa-solid fa-triangle-exclamation'></i> " . $error[$name] . "</p>";
    }
}
function set_value($name)
{
    global $$name;
    if (!empty($$name)) {
        return $$name;
    }
}
function form_success($name)
{
    global $success;
    if (!empty($success[$name])) {
        return "<p class = 'success' style='color: #2ecc71;'><i class='fa-solid fa-check'></i> " . $success[$name] . "</p>";
    }
}
