<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ text area trong PHP</title>
</head>

<body>
    <h1>Thêm bài viết</h1>
    <style>
        label,
        input,
        textarea {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <form action="" method="post">
        <label for="detail"><strong>Chi tiết</strong></label>
        <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>