<?php
function redirect_to($url)
{
    header("Location: $url");
}
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
