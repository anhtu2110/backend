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
    <form action="" method="post">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname">
        <label for="gender">Giới tính</label>
        <select name="gender" id="gender">
            <option value="">---Chọn giới tính---</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
    </form>
</div>
<?php
get_footer();
?>