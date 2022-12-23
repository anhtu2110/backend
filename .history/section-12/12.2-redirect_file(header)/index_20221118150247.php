<?php
ob_start();
if (empty($_SESSION['login'])) {
    header("Location: login.php");
} else {
    echo $_SESSION['username'];
}
