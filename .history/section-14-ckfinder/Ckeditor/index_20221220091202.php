<?php
if (isset($_POST['btn_add'])) {
    $post_content = $_POST['post_content'];
}
?>
<html>

<head>
    <title>Tích hợp trình soạn thảo văn bản vào website</title>
    <base href="http://localhost/backend/section-14-ckfinder/Ckeditor/" />
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<body>
    <style>
        #content {
            width: 960px;
            margin: 0px auto;

        }
    </style>
    <div id="content">
        <h1>Tích hợp Ckeditor vào website</h1>
        <form method="post">
            <textarea class="ckeditor" name="post_content"></textarea>
            <br>
            <input type="submit" value="Thêm dữ liệu" name="btn_add" />
        </form>
        <div class="post_content">
            <?php if (isset($post_content)) echo $post_content; ?>
        </div>
    </div>
</body>

</html>