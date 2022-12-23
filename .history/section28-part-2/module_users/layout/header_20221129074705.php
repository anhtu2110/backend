<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Hệ thống điều hướng cơ bản</title>
</head>

<body>
    <style>
        #user_login {
            color: black;
        }
    </style>
    <div id="wrapper">
        <a href="" id="logo">UNITOP</a>
        <div id="user_login">
            <p>Xin chào <strong><?php if (is_login()) echo info_user($_SESSION['user_login'], 'fullname') ?></strong> <span>(<a href="?page=logout">Đăng xuất</a>)</span></p>
        </div>
        <div id="header">
            <ul id="main-menu">
                <li><a href="?mod=home">Trang chủ</a></li>
                <li><a href="?mod=page&action=detail&id=1">Giới thiệu</a></li>
                <li><a href="?mod=post">Tin tức</a></li>
                <li><a href="?mod=product">Sản phẩm</a></li>
                <li><a href="?mod=page&action=detail&id=3">Khóa học</a></li>
                <li><a href="?mod=page&action=detail&id=2">Liên hệ</a></li>
            </ul>
        </div>
        <!-- END HEADER  -->