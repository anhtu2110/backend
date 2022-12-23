<?php
function add_cart($id)
{
    $product_item = get_product_item_by_id($id);
    show_array($product_item);
}
