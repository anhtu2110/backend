<?php
function construct()
{
}
function detailAction()
{
    load_model('index');
    $id = (int)$_GET['id'];
    $page = get_page_by_id($id);
    load_view('index');
}
