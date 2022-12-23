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
            <form>
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Mật khẩu</label>
                    <input class="form-control" type="password" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="">Nhóm quyền</label>
                    <select class="form-control" id="">
                        <!-- <option>Chọn quyền</option>
                        <option>Admin 1</option>
                        <option>Admin 2</option>
                        <option>Editor</option> -->
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>