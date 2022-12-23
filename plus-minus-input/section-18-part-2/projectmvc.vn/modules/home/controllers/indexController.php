<?php
function construct()
{
}
function indexAction()
{
    load_model('index');
    load('helper', 'format');
    $id_product_cat = array(1, 2);
    foreach ($id_product_cat as $key => $value) {
        $name = 'cat_' . $value;
        $$name = array(
            'product_cat' => get_product_cat_by_id($value),
            'list_product' => get_list_product_by_id($value),
            'num_product' => num_product($value),
        );
        $data[$name] = $$name;
    }

    load_view('index', $data);
    // show_array($data);
}
