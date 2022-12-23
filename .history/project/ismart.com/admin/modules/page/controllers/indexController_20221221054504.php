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
    load_model('index');
    load('lib', 'validation');
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
        $time = time();
        // $fullname = get_fullname_by_user_login($_SESSION['user_login']);
        // echo $fullname;
        // $sql = "INSERT INTO `tbl_page`(`page_title`, `created_at`, `creator`, `page_content`, `status`) VALUES ('$page_title','$time','$fullname','$page_content','$status')";
        // $conn = mysqli_connect('localhost', 'root', '', 'ismart.com');
        // $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     $success['add_page'] = 'Thêm trang thành công';
        // }
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
