<?php
function get_list_buy_cart()
{
    if (isset($_SESSION['cart']['buy'])) {
        return $_SESSION['cart']['buy'];
    }
    return false;
}
