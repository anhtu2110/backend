<?php
function user_exist($username, $email)
{
    if (db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' OR `email` = '{$email}'") > 0) {
        return true;
    }
    return false;
}
function add_user($data)
{
    $sql = "INSERT INTO `tbl_users`(`fullname`, `username`, `password`, `email`) VALUES ('$fullname','$username','$password','$email')";
}
