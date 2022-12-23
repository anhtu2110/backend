<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm việc với Ajax</title>
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/app.js"></script>
</head>

<body>
    <?php
    if (!empty($_SESSION['cart']['buy'])) {
    ?>
        <p>Giá: <span id="price">35</span></p>
        <label for="">Số lượng</label>
        <input type="number" min=0 max=20 name="num_order" id="num_order" value="0">
        <hr>
        <p>Tổng: <span id="total">0</span></p>
    <?php
    } else {
    ?>
        <p>Giá: <span id="price">35</span></p>
        <label for="">Số lượng</label>
        <input type="number" min=0 max=20 name="num_order" id="num_order" value="0">
        <hr>
        <p>Tổng: <span id="total">0</span></p>
    <?php
    }
    ?>
</body>

</html>