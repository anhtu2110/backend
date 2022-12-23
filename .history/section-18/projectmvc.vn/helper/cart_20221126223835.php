<?php
function get_list_buy_cart()
{
    $list_buy_cart = array();
    foreach ($_SESSION['cart']['buy'] as $key => $item) {
        $list_buy_cart[] = $item;
    }
    return $list_buy_cart;
}
