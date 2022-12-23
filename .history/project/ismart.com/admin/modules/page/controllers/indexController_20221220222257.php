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
    load_model('index');
    global $error, $page_title, $page_content, $status;
    if (isset($_POST['submit'])) {
        //Kiểm tra tiêu đề trang
        if (empty($_POST['page_title'])) {
            $error['page_title'] = 'Không được để trống tiêu đề trang';
        } else {
            $page_title = $_POST['page_title'];
        }
        //Kiểm tra nội dung trang
        if (empty($_POST['page_content'])) {
            $error['page_content'] = "Không được để trống nội dung trang";
        } else {
            $page_content = $_POST['page_content'];
        }
        //Kiểm tra trạng thái
        if (empty($_POST['status'])) {
            $error['status'] = "Không được để trống trạng thái";
        } else {
            $status = $_POST['status'];
        }
    }
    if (empty($error)) {
        $table = "`tbl_page`";
        $time = time();
        $fullname = get_fullname_by_user_login($_SESSION['user_login']);
        $data = array(
            'page_title' => $page_title,
            'created_at' => $time,
            'creator' => $fullname,
            'page_content' => $page_content,
        );
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
