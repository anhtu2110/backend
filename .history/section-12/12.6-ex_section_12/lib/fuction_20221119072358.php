<?php
function redirect_to($url)
{
    if (!empty($url)) {
        header("Location: $url");
    } else {
        return false;
    }
}

function get_header()
{
    $path_header = 'inc/header.php';
    require $path_header;
}
