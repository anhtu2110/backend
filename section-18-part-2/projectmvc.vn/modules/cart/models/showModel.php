<?php
function get_total_cart()
{
    if (!empty($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
}
