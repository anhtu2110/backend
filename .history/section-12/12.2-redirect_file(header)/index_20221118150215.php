<?php
ob_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
} else {
    echo $_SESSION['username'];
}
