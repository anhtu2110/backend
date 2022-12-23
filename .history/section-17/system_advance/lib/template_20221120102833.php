<?php
function get_header()
{
    if (isset($_GET['mod'])) {
        $mod = $_GET['mod'];
        $path = "inc/header/header_$mod.php";
        if (file_exists($path)) {
            $path_header = $path;
        } else {
            $path_header = "inc/header/header.php";
        }
    } else {
        $path_header = "inc/header/header.php";
    }
    return $path_header;
}
function get_footer()
{
    $path_footer = 'inc/footer.php';
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
}
function get_sidebar()
{
    $path_sidebar = 'inc/sidebar.php';
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    } else {
        echo "Không tồn tại đường dẫn {$path_sidebar}";
    }
}
