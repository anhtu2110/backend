<?php
//Tính toán
$num_order = $_POST['num_order'];
$price = $_POST['price'];
$total = $num_order * $price;
$result = array(
    'total' => $total,
    'num_order' => $num_order,
);
echo json_encode($result);
