<?php
require './lib/template.php';
get_header();
?>
<?php
$mod = empty($_GET['mod']) ? 'home' : $_GET['mod'];
$act = empty($_GET['act']) ? 'main' : $_GET['act'];
$path = 'modules/{$mod}/{$act}.php';
echo $path;
// $page = isset($_GET['page']) ? $_GET['page'] : 'home';
// $path = "pages/$page.php";
// if (file_exists($path)) {
//     require $path;
// } else {
//     require 'pages/404.php';
// }

?>
<?php
get_footer();
?>