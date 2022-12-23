<?php
//Những thằng chung cho vào autoload, những thằng riêng vào action cụ thể load lên
//Cho vào construct thì có phạm vi ảnh hưởng hết action còn lại

//Lib là một thư viện để phục vụ cho 1 nhu cầu nào đấy 
//Helper là một nhóm hàm dùng chung cho hệ thống và nó phổ biến
function construct()
{
    load_model('index');
    // load('helper', 'validation');
}

function indexAction()
{
    load('helper', 'format');
    load("helper", "gender");
    $list_users = get_list_users();
    //    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function loginAction()
{
    load_view('login');
}
function logoutAction()
{
    load_view('logout');
}
function regAction()
{
    // load("helper", "validation");
    load_view('reg');
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
