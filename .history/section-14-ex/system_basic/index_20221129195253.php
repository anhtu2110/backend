<?php
require './config/email.php';
require './lib/email.php';
require './lib/template.php';
get_header();
?>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "pages/$page.php";
if (file_exists($path)) {
    require $path;
} else {
    require 'pages/404.php';
}

?>
<?php
get_footer();
?>