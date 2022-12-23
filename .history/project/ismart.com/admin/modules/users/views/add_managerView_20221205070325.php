<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm người dùng
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
                    <?php echo form_error('fullname') ?>
                </div>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input class="form-control" type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
                    <?php echo form_error('username') ?>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" id="password">
                    <?php echo form_error('password') ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php if (!empty($_POST['email'])) echo $_POST['email'] ?>">
                    <?php echo form_error('email') ?>
                </div>

                <div class="form-group">
                    <label for="location_manage">Nhóm quyền</label>
                    <select class="form-control" id="location_manage" name="location_manage">
                        <option value="">Chọn quyền</option>
                        <option value="admin_1" selected <?php if (isset($location_manage) && $location_manage == 'admin_1') echo 'selected' ?>>Admin 1</option>
                        <option value="admin_2" <?php if (isset($location_manage) && $location_manage == 'admin_2') echo 'selected' ?>>Admin 2</option>
                        <option value="editor" <?php if (isset($location_manage) && $location_manage == 'editor') echo 'selected' ?>>Editor</option>
                    </select>
                    <?php echo form_error('location_manage') ?>
                </div>

                <button type="submit" name="btn_add_manage" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>