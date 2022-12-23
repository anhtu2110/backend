<?php
function check_email($email)
{
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '$email'");
    if ($row > 0) {
        return true;
    }
    return false;
}
function update_reset_token($reset_token, $email)
{
    global $conn;
    // db_update(`tbl_users`, $data, "`email` = '$email'");
    $sql = "UPDATE `tbl_users` SET `reset_token`='$reset_token' WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return "Đã cập nhập thành công";
    }
}
function check_reset_token($reset_token)
{
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `reset_token` = '$reset_token'");
    if ($row > 0) {
        return true;
    }
    return false;
}
