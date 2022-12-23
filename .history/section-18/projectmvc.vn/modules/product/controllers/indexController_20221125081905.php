<?php
function construct()
{
}
function indexAction()
{
    global $product_cat, $list_product;
    load_model('index');
    load('helper', 'format');
    $id = (int)$_GET['id'];
    $product_cat = get_product_cat_by_id($id);
    $list_product = get_list_product_by_id($id);
    load_view('index');
}
function detailAction()
{
    load_model('detail');
    $id = (int)$_GET['id'];
    $product_item = get_product_item_by_id($id);
}
