<?php
function construct()
{
}
function indexAction()
{
    load_model('index');
    $id_product_cat = array(1, 2);
    foreach ($id_product_cat as $key => $value) {
        $data = array(
            'product_cat_' . $value => get_product_cat_by_id($value),
            'list_product_' . $value => get_list_product_by_id($value),
            'num_product_' . $value => num_product($value),
        );
    }
    show_array($data);
    load_view('index', $data);
}
