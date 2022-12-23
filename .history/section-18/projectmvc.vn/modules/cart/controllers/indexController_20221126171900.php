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
    //Lấy thông tin sản phẩm cần thêm vào giỏ hàng
    $product_item = get_product_item_by_id($id);
    show_array($product_item);
    $qty = 1;
    if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy']['qty'] + 1;
    }
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
