<?php
if (isset($_POST['btn_add'])) {
    echo $_POST['editor1'];
    if (!empty($_POST['editor1'])) {
        $editor1 = $_POST['editor1'];
    }
}
?>
<?php
function set_value($name)
{
    global $$name;
    if (isset($$name)) {
        return $$name;
    }
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
            <textarea id="editor1" name="editor1" cols="80" rows="10"><?php echo set_value('editor1') ?></textarea>
            <input type="submit" name="btn_add" value="Thêm dữ liệu">
        </form>
    </div>
    <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>