<?php
ob_start();
session_start();
session_destroy();
// setcookie('is_login', 'true', time() - 3600);
// setcookie('user_login', 'unitop', time() - 3600);
header("Location: index.php");
