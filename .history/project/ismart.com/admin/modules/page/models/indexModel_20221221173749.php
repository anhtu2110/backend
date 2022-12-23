<?php
function get_fullname_by_user_login($user_login)
{
    $result = db_query("SELECT * FROM `tbl_users` WHERE `username` = $user_login");
    # Check if result greater then 0
    if (mysqli_num_rows($result) > 0) {
        while ($rowData = mysqli_fetch_assoc($result)) {
            return $rowData["fullname"] . '<br>';
        }
    }
}
