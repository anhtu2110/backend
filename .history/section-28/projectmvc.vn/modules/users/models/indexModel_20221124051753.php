<?php
//Thông thường tên controller như nào thì lấy tên model như vậy
//Model dùng để tương tác với data base

function user_exist($username, $email)
{
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
