<?php
//Làm thé nào lưu mảng vào database?

$cart['buy'] = [1, 2, 4];

$cart_json = json_encode($cart['buy']);

echo $cart_json;
