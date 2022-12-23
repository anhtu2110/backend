<!DOCTYPE html>
<html>

<head>
    <title>Unitop Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php base_url() ?>">
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
    <script src="public/js/ajax_cart.js" type="text/javascript"></script>
    <script src="public/js/add_in_cart.js" type="text/javascript"></script>
</head>

<body>
    <?php
    function get_num_order_cart()
    {
        update_info_cart();
        if (!empty($_SESSION['cart'])) {
            return $_SESSION['cart']['info']['num_order'];
        }
    }
    ?>
    <div id="site">
        <div id="container">
            <div id="header-wp" class="clearfix">
                <div class="wp-inner">
                    <a href="?mod=home" title="" id="logo" class="fl-left">UNITOP STORE</a>
                    <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div id="cart-wp" class="fl-right">
                        <a href="?mod=cart&action=show" title="" id="btn-cart">
                            <span id="icon"><img src="public/images/icon-cart.png" alt=""></span>
                            <?php
                            $num_order = get_num_order_cart();
                            if ($num_order > 0) {
                            ?>
                                <span id="num"><?php echo $num_order ?></span>
                            <?php
                            } else {
                            ?>
                                <span id="num">0</span>
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>