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
    $sql = "UPDATE `tbl_users` SET `is_active`='1' WHERE `active_token` = '$active_token'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // return "Đã cập nhật thành công";
        load('helper', 'alert');
    }
}
function check_active_token($active_token)
{
}
