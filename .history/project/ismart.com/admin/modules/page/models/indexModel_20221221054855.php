<?php
function get_fullname_by_user_login($user_login)
{
    $fullname = db_query("SELECT `fullname` FROM `tbl_users` WHERE `username` = '$user_login'");
    return escape_string($fullname);
}
