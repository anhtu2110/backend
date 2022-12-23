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
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $product_item['id'],
        'product_title' => $product_item['product_title'],
        'prict' => $product_item['price'],
        'product_thumb' => $product_item['product_thumb'],
        'code' => $product_item['code'],
        'qty' => $qty,
        'sub_total' => $product_item['price'] * $qty,
    );
    show_array($_SESSION['cart']['buy']);
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
