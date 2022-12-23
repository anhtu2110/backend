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
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $key => $item) {
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
    );
    show_array($_SESSION['cart']['buy']);
    show_array($_SESSION['cart']['info']);
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
