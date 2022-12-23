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
                // show_array($user);
                if (key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
    }
    return false;
}
function check_login()
{
    global $username, $password, $list_users;
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '$username' AND `password` = '$password'");
    if ($row > 1) {
        return true;
    }
    return false;
}
