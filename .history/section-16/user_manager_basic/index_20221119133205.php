<?php
require './data/users.php';
require './lib/validation.php';
require './lib/template.php';
?>
<?php
if (empty($_SESSION['is_login'])) {
    require 'pages/login.php';
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