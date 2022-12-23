<?php
function user_exist($username, $email)
{
    if (db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = $username OR `email` = $email") > 1) {
        return true;
    }
    return false;
}
