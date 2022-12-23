<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu form phương thức POST</title>
</head>

<body>
    <?php
    function show_array($data)
    {
        if (is_array($data)) {
            echo "<pre>";
            print_r($data);
            echo "<pre>";
        }
    }
    ?>
    <?php
    show_array($_SERVER);
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";

    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // echo "{$username}-{$email}";

    if (isset($_POST['btn_login'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        echo "{$username}-{$email}";
    }

    // if (isset($_POST['btn_login'])) {
    //     echo "{$_POST['username']} - {$_POST['email']}";
    // }
    // 
    ?>
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
        <input type="text" name="username" id="username" value="<?php echo $_POST['username'] ?>">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $_POST['email'] ?>">
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>