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
    $list_page = array(
        '1' => 'Giới thiệu',
        '2' => 'Liên hệ',
        '3' => 'Khóa học',
    );
    $page_title = $list_page[$id]
    $data = array(
        'page_title' => $page_title,
    );
    load_view('index', $data);
}
