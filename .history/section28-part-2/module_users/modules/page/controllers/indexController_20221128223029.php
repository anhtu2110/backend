<?php
function construct()
{
}
function indexAction()
{
}
function detailAction()
{
    load_model('index');
    $id = $_GET['id'];
    $page_title = get_page_title($id);
    echo $page_title;
    $data = array(
        'page_title' => $page_title,
    );
    load_view('index', $data);
}
