<?php
ob_start();
session_start();
echo "TRANG CHỦ";
if (empty($_SESSION['is_login'])) {
    header("Location: login.php");
} else {
    echo $_SESSION['user_login'];
}
