<?php
function get_list_buy_cart()
{
    if (isset($_SESSION['cart']['buy'])) {
        return $_SESSION['cart']['buy'];
    }
    return false;
}
function delete_cart($id = '')
{
    //Xóa sản phẩm có $id trong giỏ hàng
    if (!empty($id)) {
        if (array_key_exists($id, $_SESSION['cart']['buy'])) {
            unset($_SESSION['cart']['buy'][$id]);
        }
    } else {
        unset($_SESSION['cart']['buy']);
    }
    update_info_cart();
}
