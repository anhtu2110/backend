<?php
function add_cart($id)
{
    $qty = $_POST['qty'];
    $product_item = get_product_item_by_id($id);
    if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + $qty;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $product_item['id'],
        'product_title' => $product_item['product_title'],
        'price' => $product_item['price'],
        'url_product' => "?mod=product&action=detail&id=$id",
        'url_del' => "?mod=cart&action=delete&id=$id",
        'product_thumb' => $product_item['product_thumb'],
        'code' => $product_item['code'],
        'qty' => $qty,
        'sub_total' => $product_item['price'] * $qty,
    );
}
function update_info_cart()
{
    if (isset($_SESSION['cart'])) {
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
    }
}
function add_num_order_in_cart($id)
{
    $qty = $_POST['num_order'];
    if (isset($_SESSION['cart']['buy'][$id])) {
        $_SESSION['cart']['buy'][$id]['qty'] += $qty;
    }
}
function get_total_price()
{
    if (!empty($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['total'];
    }
}
function get_total_num_order()
{
    if (!empty($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
}
