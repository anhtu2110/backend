<?php
function get_fullname_by_user_login($user_login)
{
    $resultAll = mysqli_query($dbcon, "SELECT * FROM post_categorys");

    # Die if connection net established
    if (!$resultAll) {
        die(mysqli_error($dbcon));
    }

    # Check if result greater then 0
    if (mysqli_num_rows($resultAll) > 0) {
        while ($rowData = mysqli_fetch_assoc($resultAll)) {
            echo $rowData["category_name"] . '<br>';
        }
    }
}
