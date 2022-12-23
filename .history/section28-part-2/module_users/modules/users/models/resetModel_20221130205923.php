<?php
function check_email($email)
{
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '$email'");
}
