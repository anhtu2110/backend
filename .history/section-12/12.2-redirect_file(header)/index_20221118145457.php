<?php
ob_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
