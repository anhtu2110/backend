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
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    $product_item = get_product_item_by_id($id);
    show_array($product_item);
    // echo "id = {$id} - qty = {$qty}";
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
