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
    // load('lib', 'users');
    global $error, $page_title, $page_content, $status;
    $error = array();
    $success = array();
    if (isset($_POST['btn_add_page'])) {
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
        if (empty($error)) {
            $time = time();
            $username = $_SESSION['user_login'];
            $fullname = get_fullname_by_user_login($username);
            $sql = "INSERT INTO `tbl_page`(`page_title`, `created_at`, `creator`, `page_content`, `status`) VALUES ('$page_title','$time','$fullname','$page_content','$status')";
            $conn = mysqli_connect('localhost', 'root', '', 'ismart.com');
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success['add_page'] = 'Thêm trang thành công';
                header("Location: ?mod=page&action=list_page");
            }
        }
    }

    load_view('add_page');
}
function list_pageAction()
{
    load_view('list_page');
}
function edit_pageAction()
{
    load_model('index');
    load('lib', 'validation');
    // load('lib', 'users');
    global $error, $page_title, $page_content, $status;
    $error = array();
    $success = array();
    $id = $_GET['id'];
    if (isset($_POST['btn_edit_page'])) {
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
        if (empty($error)) {
            $time = time();
            $username = $_SESSION['user_login'];
            $fullname = get_fullname_by_user_login($username);
            $data = array(
                'page_title' => $page_title,
                'created_at' => $time,
                'creator' => $fullname,
                'page_content' => $page_content,
                'status' => $status
            );
            $table = "`tbl_page`";
            $where = "`id` = $id";
            $result = db_update($table, $data, $where);
            if ($result) {
?>
                <script>
                    alert("Cập nhập thành công");
                </script>
<?php
            }
        }
    }
    $page_item = db_fetch_row("SELECT * FROM `tbl_page` WHERE `id` = '$id'");
    $data['page_item'] = $page_item;
    load_view('edit_page', $data);
}
function delete_pageAction()
{
    $
}
// function delete_page_ajaxAction()
// {
//     load('helper', 'url');
//     $id = $_POST['id'];
//     $table = "`tbl_page`";
//     $where = "`id` = '$id'";
//     db_delete($table, $where);
//     $list_page = db_fetch_array("SELECT * FROM `tbl_page`");
//     $result = '';
//     $i = 0;
//     foreach ($list_page as $key => $page_item) {
//         $i++;
//         $result .= "<tr>";
//         $result .= " <td><input type='checkbox'></td>";
//         $result .= "<td scope='row'>$i</td>";
//         $result .= "<td><a href=''>" . $page_item['page_title'] . "</a></td>";
//         $result .= "<td>" . $page_item['creator'] . "</td>";
//         $result .= "<td>" . date("d/m/y G:i:s", $page_item['created_at']) . "</td>";
//         $result .= "<td>
//         <a href='?mod=page&action=edit_page&id='" . $page_item['id'] . "'>
//             <button class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fa fa-edit'></i></button>
//         </a>
//         <a class='delete_page' data-id='" . $page_item['id'] . "'>
//             <button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button>
//         </a>
//     </td>'";
//         $result .= "</tr>";
//     }
//     echo $result;
// }
