<?php
require './libraries/users.php';
require './helper/url.php';
?>
<?php
if (!is_login()) {
    redirect("?mod=users&action=login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/update_account.css">
    <script src="./public/js/jquery-3.6.1.min.js"></script>
    <title>Admintrator</title>
</head>

<body>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light bg-white d-flex">
            <div class="navbar-brand"><a href="?">UNITOP ADMIN</a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="plus-icon fas fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?mod=post&action=add_post">Thêm bài viết</a>
                        <a class="dropdown-item" href="?mod=product&action=add_product">Thêm sản phẩm</a>
                        <a class="dropdown-item" href="?mod=sales&action=list_order">Thêm đơn hàng</a>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        $fullname = get_fullname_by_user_login($_SESSION['user_login']);
                        if (!$fullname) {
                            echo $fullname;
                        } else {
                            echo $_SESSION['user_login'];
                        }

                        ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="?mod=users&action=account">Tài khoản</a>
                        <a class="dropdown-item" href="?mod=users&action=change_pass">Đổi mật khẩu</a>
                        <a class="dropdown-item" href="?mod=users&action=logout">Thoát</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav  -->