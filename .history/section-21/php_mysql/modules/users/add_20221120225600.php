<?php
get_header();
?>

<div id="content">
    <h1>Đăng ký</h1>
    <form action="" method="post" id="reg">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
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