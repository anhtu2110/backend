<?php
ob_start();
session_start();
require './data/users.php';
require './lib/validation.php';
require './lib/data.php';
require './lib/template.php';
require './lib/users.php';
?>
<?php
if (empty($_SESSION['is_login'])) {
    // require 'pages/login.php';
    redirect_to('?page=login');
} else {
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/$page.php";
    if (file_exists($path)) {
        require $path;
    } else {
        require 'pages/404.php';
    }
}

?>