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
    load('lib', 'cart');
    $id = $_GET['id'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    add_cart($id);
    update_info_cart();
    $qty = $_SESSION['cart']['buy'][$id]['qty'];
    $sub_total = $_SESSION['cart']['buy'][$id]['sub_total'];
    $total = $_SESSION['cart']['buy'][$id]['total'];
    $result = array(
        'qty' => $qty,
        'sub_total' => $sub_total,
        'total' => $total,
    );
    echo json_encode($result);
    redirect("?mod=cart&action=show");
}
function updateAction()
{
}
function deleteAction()
{
    load('helper', 'cart');
    load('lib', 'cart');
    //Xóa sản phẩm nào?
    $id = (int)$_GET['id'];
    delete_cart($id);
    update_info_cart();
    redirect("?mod=cart&action=show");
}
function delete_allAction()
{
    load('helper', 'cart');
    delete_cart();
    redirect("?mod=cart&action=show");
}
function add_num_order_in_cartAction()
{
}
