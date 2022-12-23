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

function add_managerAction()
{
    load('lib', 'validation');
    // load('lib', 'users');
    global $error, $success, $fullname, $username, $password, $email, $location_manage;
    $error = array();
    $success = array();
    if (isset($_POST['btn_add_manage'])) {
        //Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Tên hiển thị không được để trống";
        } else {
            if (strlen($_POST['fullname']) < 6 or strlen($_POST['fullname']) > 32) {
                $error['fullname'] = "Tên hiển thị có độ dài từ 6-32 ký tự";
            } else {
                $fullname = $_POST['fullname'];
            }
        }
        //Kiểm tra username
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
        //Kiểm tra password
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
        //Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Email không được để trống";
        } else {
            if (is_email($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $error['email'] = "Email không đúng định dạng";
            }
        }

        //Kiểm tra cấp quyền
        if (empty($_POST['location_manage'])) {
            $error['location_manage'] = "Vui lòng chọn vị trí để cấp quyền";
        } else {
            $location_manage = $_POST['location_manage'];
            $data = array(
                'location_manage' => $location_manage,
            );
        }

        //Kết luận
        if (empty($error)) {
            if (user_exist($username, $email)) {
                $error['add_manage'] = "Tên đăng nhập hoặc email đẫ tồn tại trên hệ thống. Vui lòng kiểm tra lại.";
            } else {
                $table = '`tbl_users`';
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'location_manage' => $location_manage,
                );
                if (add_manage($table, $data)) {
                    $success['add_manage'] = "Thêm quản lý thành công";
                }
            }
        }
    }
    load_view('add_manager', $data);
}
function list_userAction()
{
    load_view('list_user');
}
function loginAction()
{
    echo "<p style: 'z-index: 100;'" . date("d/m/Y") . "</p>";
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
function accountAction()
{
    load('lib', 'validation');
    global $error, $fullname, $email, $number_phone, $gender, $success;
    if (isset($_POST['btn-update'])) {
        //Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Tên hiển thị không được để trống";
        } else {
            if (strlen($_POST['fullname']) < 6 or strlen($_POST['fullname']) > 32) {
                $error['fullname'] = "Tên hiển thị có độ dài từ 6-32 ký tự";
            } else {
                $fullname = $_POST['fullname'];
            }
        }
        //Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Email không được để trống";
        } else {
            if (is_email($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $error['email'] = "Email không đúng định dạng";
            }
        }
        //Kiểm tra số điện thoại
        if (empty($_POST['number_phone'])) {
            $error['number_phone'] = "Số điện thoại không được để trống";
        } else {
            if (is_num_phone($_POST['number_phone'])) {
                $number_phone = $_POST['number_phone'];
            } else {
                $error['number_phone'] = "Số điện thoại không đúng định dạng";
            }
        }
        //Kiểm tra giới tính
        if (isset($_POST['gender'])) {
            if ($_POST['gender'] == 'Nam') {
                $gender = 'male';
            };
            if ($_POST['gender'] == 'Nữ') {
                $gender = 'female';
            }
        }
        if (empty($error)) {
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'number_phone' => $number_phone,
                'gender' => $gender,
            );
            $user_login = $_SESSION['user_login'];
            $table = '`tbl_users`';
            $where = "`username` = '$user_login'";
            if (update_account($table, $data, $where)) {
                $success['update'] = "Cập nhật thành công";
            }
        }
    }
    $user = get_user_by_user_login($_SESSION['user_login']);
    $data = array(
        'user' => $user,
    );
    load_view('account', $data);
}
function change_passAction()
{
    load('lib', 'validation');
    load('helper', 'url');
    global $error, $old_pass, $new_pass, $re_new_pass;
    if (isset($_POST['btn_change_pass'])) {
        if (empty($_POST['old_pass'])) {
            $error['old_pass'] = "Vui lòng nhập mật khẩu.";
        } else {
            if (check_pass(md5($_POST['old_pass']))) {
                $old_pass = $_POST['old_pass'];
                if (empty($_POST['new_pass'])) {
                    $error['new_pass'] = "Vui lòng nhập mật khẩu mới.";
                } else {
                    if (strlen($_POST['new_pass']) < 6 or strlen($_POST['new_pass']) > 32) {
                        $error['new_pass'] = "Mật khẩu mới có độ dài từ 6-32 ký tự.";
                    } else {
                        if (is_password($_POST['new_pass'])) {
                            $new_pass = $_POST['new_pass'];
                            if (empty($_POST['re_new_pass'])) {
                                $error['re_new_pass'] = "Vui lòng nhập lại mật khẩu mới.";
                            } else {
                                $re_new_pass = $_POST['re_new_pass'];
                                if ($new_pass != $re_new_pass) {
                                    $error['re_new_pass'] = "Mật khẩu mới không trùng nhau. Vui lòng nhập lại.";
                                }
                            }
                        } else {
                            $error['new_pass'] = "Mật khẩu mới không đúng định dạng. Vui lòng nhập lại.";
                        }
                    }
                }
            } else {
                $error['old_pass'] = "Sai mật khẩu. Vui lòng nhập lại mật khẩu.";
            }
        }
        if (empty($error)) {
            $user_login = $_SESSION['user_login'];
            $table = '`tbl_users`';
            $where = "`username` = '$user_login'";
            $data = array(
                'password' => md5($new_pass),
            );
            if (change_pass($table, $data, $where)) {
                redirect("?mod=dashboard");
            }
        }
    }
    load_view('change_pass');
}
function logoutAction()
{
    load('helper', 'url');
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    if (isset($_COOKIE['is_login']) && isset($_COOKIE['user_login'])) {
        setcookie('is_login', true, time() - 3600);
        setcookie('user_login', $_SESSION['user_login'], time() - 3600);
    }
    redirect("?mod=users&action=login");
}
