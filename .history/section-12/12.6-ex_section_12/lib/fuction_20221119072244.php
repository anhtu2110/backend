<?php
function redirect_to($url)
{
    header("Location: $url");
}

function get_header()
{
    $path_header = 'inc/header.php';
    require $path_header;
}
