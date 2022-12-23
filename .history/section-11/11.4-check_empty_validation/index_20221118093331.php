<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu Form đăng nhập</title>
</head>

<body>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username">
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>