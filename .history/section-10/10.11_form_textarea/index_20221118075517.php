<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ text area trong PHP</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_add'])) {
        $error = array();
        if (empty($_POST['post_detail'])) {
            $error['post_detail'] = "Không được để trống thêm bài viết";
        } else {
            $post_detail = $_POST['post_detail'];
        }
    }
    ?>
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
        <textarea name="post_detail" id="detail" cols="50" rows="10"></textarea>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>