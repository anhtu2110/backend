<?php
$id = $_GET['id'];
$mysql = "DELETE FROM `tbl_user` WHERE `user_id` = $id";
$result = mysqli_query($conn, $mysql);
if ($result) {
    redirect_to("?mod=users&act=main");
} else {
    echo "Lỗi." . mysqli_error($sql);
}
