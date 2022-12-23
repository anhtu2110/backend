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
    load_view('login');
}
