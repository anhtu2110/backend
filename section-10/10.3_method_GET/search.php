<?php

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
if (isset($_GET['btn_search'])) {
    show_array($_GET);
    echo $_GET['q'] . "-" . $_GET['btn_search'];
}
