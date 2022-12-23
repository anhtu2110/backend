<?php
if (isset($_POST['send_file'])) {
    #Xử lý upload đúng file ảnh
    $type_allow = array('png', 'jpg', 'gift', 'jpeg');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file ảnh lên server</title>
</head>

<body>
    <h1>Upload File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Send file:</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="send_file" value="Send file">
    </form>
</body>

</html>