<?php
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);
show_array($item);
?>
<?php
get_header();
?>
<?php
get_footer();
?>