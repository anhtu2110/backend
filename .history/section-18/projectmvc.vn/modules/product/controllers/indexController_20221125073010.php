<?php
function construct()
{
}
function indexAction()
{
    load_model('index');
    $id = (int)$_GET['id'];
    $product_cat = get_product_cat_by_id($id)
    $list_product = get_list_product_by_id($id);
}
function detailAction()
{
}
