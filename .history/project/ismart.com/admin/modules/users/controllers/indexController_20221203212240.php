<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    load('helper', 'format');
    $list_users = get_list_users();
    //    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function add_userAction()
{
    load_view('add_user');
}
function list_userAction()
{
    load_view('list_user');
}
function loginAction()
{
    load('lib', 'validation');
    load('lib', 'users');
    load('helper', 'url');
    global $error, $username, $password, $remember_me;
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
                    $password = md5($_POST['password']);
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
                redirect('?mod=dashboard');
            } else {
                $error['login'] = "Tài khoản không tồn tại trên hệ thống.";
            }
        }
    }
    load_view('login');
}
