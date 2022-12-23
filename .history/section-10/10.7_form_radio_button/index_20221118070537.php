<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu form từ radio button</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_reg'])) {
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
    }
    ?>
    <style>
        input[type='submit'] {
            display: block;
            margin-top: 10px;
        }
    </style>
    <h1>Nhận dữ liệu form từ radio button</h1>
    <form action="" method="post">
        <input type="radio" name="gender" value="male" id="male" checked>
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Nữ</label>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>