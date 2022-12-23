<?php
function get_info_cart()
{
    if (!empty($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
}
