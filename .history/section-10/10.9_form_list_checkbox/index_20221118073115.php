<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ list checkbox</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_add'])) {
        if (isset($_POST['cat'])) {
            // foreach ($_POST['cat'] as $value) {
            //     echo $value . "<br>";
            // }
            $list_check = implode(',', $_POST['cat']);
            echo $list_check;
        }
    }
    ?>
    <h1>Chọn danh mục</h1>
    <form action="" method="post">
        <input type="checkbox" name="cat[]" value="1" id="cat_1">
        <label for="cat_1">Thể thao</label> <br>
        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2">Xã hội</label> <br>
        <input type="checkbox" name="cat[]" value="3" id="cat_3">
        <label for="cat_3">Văn Hóa</label> <br>
        <input type="checkbox" name="cat[]" value="4" id="cat_4">
        <label for="cat_4">Du lịch</label> <br>
        <input type="checkbox" name="cat[]" value="5" id="cat_5">
        <label for="cat_5">Ảm thực</label> <br>
        <input type="checkbox" name="cat[]" value="6" id="cat_6">
        <label for="cat_6">Tin tức</label> <br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>