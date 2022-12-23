<?php
ob_start();
session_start();
if (empty($_SESSION['login'])) {
    header("Location: login.php");
} else {
    echo $_SESSION['username'];
}
