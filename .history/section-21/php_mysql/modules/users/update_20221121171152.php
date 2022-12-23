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
if (isset($_POST['btn_update'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Fullname không được để trống.";
    } else {
        if (strlen($_POST['fullname']) < 6 or strlen($_POST['fullname']) > 32) {
            $error['fullname'] = "Fullname có độ dài từ 6-32 ký tự.";
        } else {
            $fullname = $_POST['fullname'];
        }
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = "Giới tính không được để trống.";
    } else {
        $gender = $_POST['gender'];
    }
    $alert = array();
    if (empty($error)) {
        $sql_update = "UPDATE `tbl_users` SET `fullname` = '$fullname', `gender` = '$gender' WHERE `user_id` = $id";
        $result_update = mysqli_query($conn, $sql_update);
        if ($result_update) {
            $alert['success'] = "Cập nhật thành công";
        }
    }
}
?>
<div id="content">
    <h1>Cập nhật</h1>
    <form class="update" action="" method="post">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo $item['fullname'] ?>">
        <?php echo form_error('fullname') ?>
        <label for="gender">Giới tính</label>
        <select name="gender" id="gender">
            <option value="">---Chọn giới tính---</option>
            <option value="male" <?php if (!empty($item['gender']) && $item['gender'] == 'male' && empty($gender)) {
                                        echo 'selected';
                                    }
                                    if (!empty($gender) && $gender == 'male') {
                                        echo 'selected';
                                    } ?>>Nam</option>
            <option value="female" <?php if (!empty($item['gender']) && $item['gender'] == 'female' && empty($gender)) {
                                        echo 'selected';
                                    }
                                    if (!empty($gender) && $gender == 'female') {
                                        echo 'selected';
                                    } ?>>Nữ</option>
        </select>
        <?php echo form_error('gender') ?>
        <input type="submit" value="Cập nhật" name="btn_update">
    </form>
</div>
<?php
get_footer();
?>