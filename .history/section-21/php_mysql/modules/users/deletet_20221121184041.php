<?php
$id = $_GET['id'];
$sql = "DELETE FROM `tbl_user` WHERE `user_id` = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    redirect_to("?mod=users&act=main");
} else {
    echo "Lỗi." . mysqli_connect_error($conn);
}
