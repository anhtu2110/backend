<?php
function construct()
{
}
function showAction()
{
    show_array($_SESSION['cart']);
    load_view('show');
}
function addAction()
{
    load_model('add');
    load('lib', 'cart');
    $id = $_GET['id'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    add_cart($id);
    update_info_cart();
    redirect("?mod=cart&action=show");
}
function updateAction()
{
}
function deleteAction()
{
}
function delete_allAction()
{
}
