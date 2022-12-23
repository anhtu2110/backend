<?php
if (isset($_POST['btn_add'])) {
    echo $_POST['post_content'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Replace Textarea by Code</title>

    <!-- (1): Khai báo sử dụng thư viện CKEditor -->
    <script src="./ckeditor/ckeditor.js"></script>

</head>

<body>
    <style>
        #content {
            width: 960px;
            margin: 0 auto;
        }

        input[type='submit'] {
            float: right;
            margin-block: 10px;
        }
    </style>

    <div id="content">
        <h2>Replace Textarea Elements Using JavaScript Code</h2>
        <form action="" method="post">

            <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
            <textarea id="editor1" name="editor1 post_content" cols="80" rows="10"><p>Hello mình tên là <strong>Đào Anh Tú</strong></p></textarea>
            <input type="submit" name="btn_add" value="Thêm dữ liệu">
        </form>
    </div>
    <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>