<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    load('helper', 'format');
    load('lib', 'users');
    $list_users = get_list_users();
    // show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function regAction()
{
    load('lib', 'validation');
    load('lib', 'email');
    load_model('reg');
    global $error, $fullname, $username, $email;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Fullname không được để trống.";
        } else {
            if (strlen($_POST['fullname']) < 6 && strlen($_POST['fullname']) > 32) {
                $error['fullname'] = "Fullname có độ dài từ 6-32 ký tự.";
            } else {
                $fullname = $_POST['fullname'];
            }
        }

        if (empty($_POST['username'])) {
            $error['username'] = 'Username không được để trống.';
        } else {
            if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
                $error['username'] = "Username có độ dài từ 6-32 ký tự.";
            } else {
                if (is_username($_POST['username'])) {
                    $username = $_POST['username'];
                } else {
                    $error['username'] = 'Username không đúng định dạng.';
                }
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = 'Password không được để trống.';
        } else {
            if (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 32) {
                $error['password'] = "Password có độ dài từ 6-32 ký tự.";
            } else {
                if (is_password($_POST['password'])) {
                    $password = md5($_POST['password']);
                } else {
                    $error['password'] = 'Password không đúng định dạng.';
                }
            }
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Email không được để trống.";
        } else {
            if (is_email($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $error['email'] = "Email không đúng đinh dạng.";
            }
        }


        #Kết luận
        if (empty($error)) {
            if (user_exist($username, $email)) {
                $error['reg'] = "Username hoặc Email đã tồn tại trên hệ thống. Vui lòng thay đổi.";
            } else {
                $active_token = md5($username) . time();
                add_user($fullname, $username, $password, $email, $active_token);
                $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>Chào bạn $fullname</p>
                <p>Bạn vui lòng click vào đường link này để kích hoạt tài khoản: $link_active</p>
                <p>Team Support Unitop.vn</p>";

                echo send_mail('daotu2110@gmail.com', 'Đào Anh Tú', 'Kích hoạt tài khoản PHP MASTER', $content);
                // redirect("?mod=users&action=login");
            }
        }
    }
    load_view('reg');
}
function activeAction()
{
    load_model('reg');
    $active_token = $_GET['active_token'];
    if (check_active_token($active_token)) {
        echo active_user($active_token);
        // $link_login = base_url("?mod=users&action=login");
        // echo "Bạn đã kích hoạt thành công. Vui lòng click vào đây để <a href='$link_login'>Đăng nhập</a>";
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ";
    }
}
function loginAction()
{
    load('lib', 'validation');
    global $error, $username;
    if (isset($_POST['btn_login'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = 'Username không được để trống.';
        } else {
            if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
                $error['username'] = "Username có độ dài từ 6-32 ký tự.";
            } else {
                if (is_username($_POST['username'])) {
                    $username = $_POST['username'];
                } else {
                    $error['username'] = 'Username không đúng định dạng.';
                }
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = 'Password không được để trống.';
        } else {
            if (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 32) {
                $error['password'] = "Password có độ dài từ 6-32 ký tự.";
            } else {
                if (is_password($_POST['password'])) {
                    $password = $_POST['password'];
                } else {
                    $error['password'] = 'Password không đúng định dạng.';
                }
            }
        }

        #Kết luận
        if (empty($error)) {
            if (check_login()) {
                #Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                if (isset($_POST['remember_me'])) {
                    setcookie('is_login', true, time() + 3600);
                    setcookie('user_login', $username, time() + 3600);
                    // $_SESSION['is_login'] = $_COOKIE['is_login'];
                    // $_SESSION['user_login'] = $_COOKIE['user_login'];
                }
                redirect('?mod=home');
            } else {
                $error['login'] = "Tài khoản không tồn tại trên hệ thống.";
            }
        }
    }
    load_view('login');
}
function logoutAction()
{
    redirect("?mod=users&action=login");
}
function addAction()
{
    echo "Thêm dữ liệu";
}

function editAction()
{
    $id = (int)$_GET['id'];
    $item = get_user_by_id($id);
    show_array($item);
}
