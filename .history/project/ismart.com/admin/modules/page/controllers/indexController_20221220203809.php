<?php
function construct()
{
}
function indexAction()
{
    load_view('index');
}
function add_pageAction()
{
    load('lib', 'database');
    global $error, $page_title, $page_content, $status;
    if (isset($_POST['submit'])) {
        if (empty($_POST['page_title'])) {
            $error['page_title'] = 'Không được để trống tiêu đề trang';
        } else {
            # code...
        }
    } else {
        # code...
    }

    load_view('add_page');
}
function list_pageAction()
{
    load_view('list_page');
}
function edit_pageAction()
{
    load_view('edit_page');
}
