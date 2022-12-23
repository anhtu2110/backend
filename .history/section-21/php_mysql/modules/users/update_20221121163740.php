<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
