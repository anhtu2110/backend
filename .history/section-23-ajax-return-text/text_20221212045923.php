<?php
require './lib/database.php';

$conn = mysqli_connect('localhost', 'root', '', 'unitop');
$sql = "SELECT * FROM `tbl_users`";
$result = mysqli_query($conn, $sql);
