<?php
function get_list_product_by_id($id)
{
}
function get_product_cat_by_id($id)
{ {
        $result = db_fetch_row("SELECT * FROM `list_product_cart` WHERE `id` = $id");
        return $result;
    }
}
