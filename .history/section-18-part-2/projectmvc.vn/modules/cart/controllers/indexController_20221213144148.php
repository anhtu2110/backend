<?php
function construct()
{
    load('lib', 'cart');
    load('helper', 'cart');
}
function showAction()
{
    load_model('show');
    load('helper', 'format');
    $list_buy = get_list_buy_cart();
    $total_cart = get_total_cart();
    $data = array(
        'list_buy' => $list_buy,
        'total_cart' => $total_cart,
    );
    // show_array($list_buy);
    load_view('show', $data);
}
function addAction()
{
    load_model('add');
    $id = $_GET['id'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    add_cart($id);
    update_info_cart();
    redirect("?mod=cart&action=show");
}
function updateAction()
{
    show_array($_POST['qty']);
}
function deleteAction()
{
    //Xóa sản phẩm nào?
    $id = (int)$_GET['id'];
    delete_cart($id);
    update_info_cart();
    redirect("?mod=cart&action=show");
}
function delete_allAction()
{
    delete_cart();
    redirect("?mod=cart&action=show");
}
