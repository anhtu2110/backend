<?php
function construct()
{
}
function showAction()
{
    load_model('show');
    load('helper', 'cart');
    load('helper', 'format');
    $list_buy = get_list_buy_cart();
    $info_cart = get_info_cart();
    $data = array(
        'list_buy' => $list_buy,
        'info_cart' => $info_cart,
    );
    // show_array($list_buy);
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
