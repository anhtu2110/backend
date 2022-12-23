<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 11</title>
</head>

<body>
    <style>
        label,
        input {
            display: block;
            margin-block: 8px;
        }
    </style>
    <h1>Đăng ký</h1>
    <form action="" method="post">
        <label for="fullname">Họ và tên: </label>
        <input type="text" name="fullname" id="fullname">
        <label for="username">Tên đăng nhập: </label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="num_phone">Số điện thoại: </label>
        <input type="text" name="num_phone" id="num_phone">
        <input type="submit" name="btn_reg" value="Đăng ký">
    </form>
</body>

</html>