<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Cập nhật tài khoản</h5>
        </div>
        <div class="card-body">
            <div id="update_account">
                <form method="post" action="">
                    <?php
                    if (!empty($user)) {
                    ?>
                        <label for="fullname" class="d-block"><strong>Tên hiển thị</strong></label>
                        <input type="text" class="d-block w-25" name="fullname" id="fullname" value="<?php echo $user['fullname'] ?>">
                        <label for="username" class="d-block"><strong>Tên đăng nhập</strong></label>
                        <input type="text" class="d-block w-25" name="username" id="username" value="<?php echo $_SESSION['user_login'] ?>" disabled>
                        <label for="email" class="d-block"><strong>Email</strong></label>
                        <input type="email" class="d-block w-25" name="email" id="email" value="<?php echo $user['email'] ?>">
                        <label for="number_phone" class="d-block"><strong>Số điện thoại</strong></label>
                        <input type="tel" class="d-block w-25" name="number_phone" id="number_phone">
                        <label for="gender" class="d-block"><strong>Giới tính</strong></label>
                        <input type="radio" class="d-inline-block" name="gender" id="male" value="Nam">
                        <label for="male" class="d-inline-block mr-2">Nam</label>
                        <input type="radio" class="d-inline-block" name="gender" id="female" value="Nữ">
                        <label for="female" class="d-inline-block">Nữ</label>
                    <?php
                    }
                    ?>
                    <input type="submit" class="btn btn-primary d-block" name="btn-update" value="CẬP NHẬT">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>