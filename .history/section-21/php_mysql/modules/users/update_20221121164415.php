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
<div id="content">
    <h1>Cập nhật</h1>
</div>
<?php
get_footer();
?>