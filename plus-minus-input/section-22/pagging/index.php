<?php
require './db/connect.php';
require './lib/database.php';
require './lib/data.php';
require './lib/template.php';
require './lib/validation_ex.php';
require './lib/url.php';
require './lib/pagging.php';
?>
<?php
$mod = empty($_GET['mod']) ? 'home' : $_GET['mod'];
$act = empty($_GET['act']) ? 'main' : $_GET['act'];
$path = "modules/{$mod}/{$act}.php";

if (file_exists($path)) {
    require $path;
} else {
    require './inc/404.php';
}
?>