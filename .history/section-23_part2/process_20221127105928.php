<?php
$num_order = $_POST['num_order'];
$price = $_POST['price'];

$total = $num_order * $price;
$_SESSION['cart']['info'] = array(
    'num_order' => $num_order,
    'price' => $price,
);
$result = $_SESSION['cart']['info'];
echo json_encode($result);
