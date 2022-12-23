<?php
function check_email($email)
{
    $row = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '$email'");
    if ($row > 0) {
        return true;
    }
    return false;
}
function update_reset_token($data, $email)
{
    global $conn;
    // db_update(`tbl_users`, $data, "`email` = '$email'");
    $sql = "UPDATE `tbl_users` SET `is_active`='1' WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return "Đã cập nhập thành công";
    }
}
