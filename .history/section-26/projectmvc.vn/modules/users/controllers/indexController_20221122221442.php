<?php
//Những thằng chung cho vào autoload, những thằng riêng vào action cụ thể load lên
//Cho vào construct thì có phạm vi ảnh hưởng hết action còn lại

//Lib là một thư viện để phục vụ cho 1 nhu cầu nào đấy 
//Helper là một nhóm hàm dùng chung cho hệ thống và nó phổ biến
function construct()
{
    echo "Dùng chung, hoặc load đầu tiên.";
    load_model('index');
}

function indexAction()
{
    load('helper', 'format');
    load("helper", "gender");
    $list_users = get_list_users();
    //    show_array($list_users);
    $data['list_users'] = $list_users;
    $data = array(
        'a' => 'Đào Anh Tú',
        'b' => 'Đào Văn Đức',
        'c' => 'Trần Văn Đạt',
    );
    load_view('index', $data);
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
