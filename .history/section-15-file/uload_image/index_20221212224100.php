<?php
if (isset($_POST['send_file'])) {
    #Xử lý upload đúng file ảnh
    $error = array();
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "Chỉ được upload file có đuôi png, jpg, gif, jpeg";
        $file_size = $_FILES['file']['size'];
        if ($file_size < 21000000) {
            $file_dir = "uploads/";
            $file_upload = $file_dir.$_FILES['file']['name'];
            if () {
                # code...
            } else {
                # code...
            }
            
        } else {
            $error['size'] = "File phải có kích thước nhỏ hơn 20MB";
        }
    }

    if (empty($error)) {
    }
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