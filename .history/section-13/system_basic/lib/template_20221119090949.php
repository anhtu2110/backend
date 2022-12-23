<?php
function get_header()
{
    $path_header = 'inc/header.php';
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại đường dẫn {$path_header}";
    }

    require 'inc/header.php';
}
function get_footer()
{
    require 'inc/footer.php';
}
