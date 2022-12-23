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
    $sql = "UPDATE `tbl_users` SET `user_id`='[value-1]',`fullname`='[value-2]',`username`='[value-3]',`password`='[value-4]',`email`='[value-5]',`gender`='[value-6]',`is_active`='[value-7]',`active_token`='[value-8]' WHERE 1";
    $data = array(
        'is_active' => 1,
    );
    return db_update(`tbl_users`, $data, "`active_token` = $active_token");
}
