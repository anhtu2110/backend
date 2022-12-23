<?php
function construct()
{
}
function showAction()
{
    load_view('show');
}
function addAction()
{
    load_model('add');
    $id = $_GET['id'];
    // $qty = $_GET['qty'];
    echo $_GET['id'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    $product_item = get_product_item_by_id($id);
    show_array($product_item);
    //Thêm sản phẩm vào giỏ hàng
    // redirect("?mod=cart&action=show");
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
