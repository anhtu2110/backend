<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
function show_value($data = array())
{
    return $data[4];
}
$list_name = array(
    3, 5, 7, 9, 11
);
echo show_value($list_name);
?>

<body>
    <form action="modules/process.php" method="post">
        <input type="text" name="username" id="username" placeholder="Họ và tên">
        <input type="password" name="password" id="password" placeholder="Mật khẩu">
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>

</html>