<?php
//Làm thé nào lưu mảng vào database?

$cart['buy'] = [
    1 => array(
        'product' => 'Php Master',
    )
];

print_r($cart['buy']);
$cart_json = json_encode($cart['buy']);

echo $cart_json;
