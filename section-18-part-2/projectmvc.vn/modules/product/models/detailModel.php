<?php
function get_product_item_by_id($id)
{
    $result = db_fetch_row("SELECT * FROM `list_product` WHERE `id` = $id");
    return $result;
}
