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
                    <label for="fullname" class="d-block">Tên hiển thị</label>
                    <input type="text" class="d-block" name="fullname" id="fullname">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="username" id="username" disabled>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="number_phone">Số điện thoại</label>
                    <input type="tel" name="number_phone" id="number_phone">
                    <label for="gender">Giới tính</label>
                    <input type="radio" name="gender" id="male" value="Nam">
                    <label for="male">Nam</label>
                    <input type="radio" name="gender" id="female" value="Nữ">
                    <label for="female">Nữ</label>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>