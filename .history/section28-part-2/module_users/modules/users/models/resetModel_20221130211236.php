<?php
function check_email($email)
{
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '$email'");
    if ($row > 0) {
        return true;
    }
    return false;
}
function update_reset_token()
{
}
