<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu form phương thức GET</title>
</head>

<body>
    <?php
    #GET dữ liệu từ url

    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $id = $_GET['id'];
    echo $mod . "-" . $act . "-" . $id;
    ?>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <h1>Tìm kiếm</h1>
    <a href="?mod=proudct&act=detail&id=1268">Sản phẩm</a>
    <form action="search.php" method="get">
        <label for="q">Tìm kiếm: </label>
        <input type="text" name="q" id="q">
        <input type="submit" name="btn_search" value="Search">
    </form>
</body>

</html>