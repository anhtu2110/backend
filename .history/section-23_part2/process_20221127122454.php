<?php
$num_order = $_POST['num_order'];
$price = $_POST['price'];

$total = $num_order * $price;
$_SESSION['cart']['info'] = array(
    'num_order' => $num_order,
    'total' => $total,
);
$result = array(
    'price' => $price,
    'num_order' => $_SESSION['cart']['info']['num_order'],
    'total' => $_SESSION['cart']['info']['total'],
);
echo json_encode($result);
