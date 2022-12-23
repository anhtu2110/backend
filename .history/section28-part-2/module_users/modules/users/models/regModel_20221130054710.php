<?php
function user_exist($username, $email)
{
    if (db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' OR `email` = '{$email}'") > 0) {
        return true;
    }
    return false;
}
function add_user($fullname, $username, $password, $email, $active_token)
{
    global $conn;
    $sql = "INSERT INTO `tbl_users`(`fullname`, `username`, `password`, `email`, `active_token`) VALUES ('$fullname','$username','$password','$email', '$active_token')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        echo db_sql_error('Query Error', $sql);
    }
}
function active_user($active_token)
{
    global $conn;
    $result = db_query("SELECT `is_active` FROM `tbl_users` WHERE `active_token` = '$active_token'");
    if ($result == 1) {
        return "Tài khoản đã được kích hoạt.";
    } else {
        if (db_update('tbl_users', array('is_active' => 1), "`active_token` = '$active_token'")) {
            return "Bạn đã kích hoạt thành công.";
        }
    }

    $sql = "UPDATE `tbl_users` SET `is_active`='1' WHERE `active_token` = '$active_token'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return "Đã cập nhập thành công";
    }
}
function check_active_token($active_token)
{
    // global $conn;
    // $sql = "SELECT * FROM `tbl_users` WHERE `active_token` = '$active_token'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_num_rows($result);
    // if ($row > 0) {
    //     return true;
    // } else {
    //     return false;
    // }
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `active_token` = '$active_token'");
    if ($check > 0) {
        return true;
    }
    return false;
}
