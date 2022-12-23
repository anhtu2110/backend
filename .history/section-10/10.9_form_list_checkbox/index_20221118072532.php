<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ list checkbox</title>
</head>

<body>
    <h1>Chọn danh mục</h1>
    <form action="" method="post">
        <input type="checkbox" name="cat[]" value="1" id="cat_1">
        <label for="cat_1">Thể thao</label> <br>
        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2">Xã hội</label> <br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>