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

    $product_cat = ;
    $list_product = get_list_product_by_id($id);
    $num_product = num_product($id);
    $data = array(
        'product_cat' => get_product_cat_by_id($id),
        // 'list_product' => $list_product,
        'num_product' => $num_product,
    );
    load_view('index', $data);
}
function detailAction()
{
    load_model('detail');
    load('helper', 'format');
    $id = (int)$_GET['id'];
    global $product_item;
    $product_item = get_product_item_by_id($id);
    load_view('detail');
}
