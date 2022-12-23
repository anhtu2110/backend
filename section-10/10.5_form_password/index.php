<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu form từ password</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_login'])) {
        if (empty($_POST['password'])) {
            echo "Không được để trống password";
        } else {
            echo $_POST['password'];
        }
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <h1>Nhận dữ liệu form từ password</h1>
    <form action="" method="post">
        <!-- Cho dù dữ liệu có nhập hay không nhập thì nó vẫn đẩy lên server bình thường -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>