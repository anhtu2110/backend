<?php
//Thông thường tên controller như nào thì lấy tên model như vậy
//Model dùng để tương tác với data base

function user_exist($username, $email)
{
    $check_user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = $username OR `email` = $email");
    if ($check_user > 0) {
        return true;
    }
    return false;
}
function add_user($data)
{
    return db_insert(`tbl_users`, $data);
}
function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}
