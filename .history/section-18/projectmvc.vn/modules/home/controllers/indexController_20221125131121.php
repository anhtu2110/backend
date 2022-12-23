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
            'product_cat_' . $key => get_product_cat_by_id($value),

        );
    }
}
