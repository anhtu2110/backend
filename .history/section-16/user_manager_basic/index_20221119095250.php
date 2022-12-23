<?php
require './lib/template.php';
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