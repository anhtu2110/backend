<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi nhận dữ liệu sau khi submit</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username">
        <?php echo form_error('username'); ?>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>