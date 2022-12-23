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
    $user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '$username'");
    if (isset($_SESSION['is_login'])) {
        if (key_exists($field, $user)) {
            return $user[$field];
        }
    }
    return false;
}
function show_gender($gender)
{
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    return $list_gender[$gender];
}
