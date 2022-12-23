<?php
//Trả về true nếu login
function is_login()
{
    if (isset($_SESSION['is_login'])) {
        return true;
    }
    return false;
}
// Trả về username của người login 
function user_login()
{
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
}
function info_user($username, $field = 'id')
{
    global $list_users;
    if (isset($_SESSION['is_login'])) {
        foreach ($list_users as $user) {
            if ($username == $user['username']) {
                show_array($user);
                if (in_array($field, $user)) {
                    return "<p>" . $user[$field] . "</p>";
                }
            }
        }
    }
    return false;
}
