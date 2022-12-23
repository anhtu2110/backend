<?php
function construct()
{
}
function detailAction()
{
    global $page;
    load_model('index');
    load('helper', 'data');
    $id = (int)$_GET['id'];
    $page = get_page_by_id($id);
    load_view('index');
}
