<?php
function construct()
{
}
function showAction()
{
    load('helper', 'cart');
    $list_buy = get_list_buy_cart();
    $data = array(
        'list_buy' => $list_buy,
    );
    show_array($list_buy_cart);
    load_view('show', $data);
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
