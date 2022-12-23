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
                    <input class="form-control" type="text" name="fullname" id="fullname">
                </div>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="">Nhóm quyền</label>
                    <select class="form-control" id="" name="location_manage">
                        <option>Chọn quyền</option>
                        <option value="admin_1">Admin 1</option>
                        <option value="admin_2">Admin 2</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>

                <button type="submit" name="btn_add_manage" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>