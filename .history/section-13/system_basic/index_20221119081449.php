<?php
require 'inc/header.php';
?>
<?php
$page = $_GET['page'];
$path = "pages/$page.php";
if (file_exists($path)) {
    require $path;
} else {
    echo "<p class='error'>Đường dẫn không tồn tại:" . $path . "</p>";
}

?>
<?php
require 'inc/footer.php';
?>