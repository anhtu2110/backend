<?php

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_user_login($user_login)
{
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$user_login}'");
    return $item;
}
function update_account($table, $data, $where)
{
    return $result = db_update($table, $data, $where);
}
