<?php
function user_exist($username, $email)
{
    if (db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' OR `email` = '{$email}'") > 0) {
        return true;
    }
    return false;
}
function add_user($fullname, $username, $password, $email)
{
    global $conn;
    $sql = "INSERT INTO `tbl_users`(`fullname`, `username`, `password`, `email`) VALUES ('$fullname','$username','$password','$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    }
}
