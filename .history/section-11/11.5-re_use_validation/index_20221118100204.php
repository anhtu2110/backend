<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi nhận dữ liệu sau khi submit</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_login'])) {
        $error = array(); // Phất cờ
        if (empty($_POST['username'])) {
            //Hạ cờ
            $error['username'] = "Không được để trống trường Username";
        } else {
            $username = $_POST['username'];
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            $password = $_POST['password'];
        }
        //Kết luận
        if (empty($error)) {
            //Xử lý không có lỗi
            echo "Username: {$username} <br> Password: {$password}";
        }
    }
    ?>
    <?php
    function form_error($name)
    {
        global $error;
        if (!empty($error[$name])) {
            return "<p class='error'>{$error[$name]}</p>";
        }
    }
    ?>
    <style>
        label,
        input,
        select {
            display: block;
            margin-bottom: 10px;
        }

        p.error {
            color: red;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username ?>">
        <?php echo form_error('username'); ?>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <select name="gender" id="">
            <option value="male" selected>Nam</option>
            <option value="female" <?php if ($_POST['gender'] == 'female') echo "selected" ?>>Nữ</option>
        </select>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>