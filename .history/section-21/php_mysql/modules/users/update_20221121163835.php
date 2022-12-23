<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
show_array($row);
