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
function is_email($email)
{
    $pattern = "/^([\w_\.]){8,24}@([a-z_\.]{6,32})$/";
    if (preg_match($pattern, $email, $matchs)) {
        return true;
    }
    return false;
}
function form_error($name)
{
    global $error;
    if (!empty($error[$name])) {
        return "<p class='error'><i class='fa-solid fa-triangle-exclamation'></i> " . $error[$name] . "</p>";
    }
}
function set_value($name)
{
    global $$name;
    if (!empty($$name)) {
        return $$name;
    }
}
function check_login()
{
    global $username, $password, $list_users;
    foreach ($list_users as $user) {
        if ($user['username'] == $username && $user['password'] == md5($password)) {
            return true;
        }
    }
    return false;
}
