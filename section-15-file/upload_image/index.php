<?php
require './lib/upload.php';
if (isset($_POST['send_file'])) {
    #Xử lý upload đúng file ảnh
    show_array($_FILES);
    $error = array();
    $success = array();
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "Chỉ được upload file có định dạng png, jpg, gif, jpeg";
    } else {
        $file_size = $_FILES['file']['size'];
        if ($file_size < 21000000) {
            $file_dir = "uploads/";
            $file_name =  pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            $upload_file = $file_dir . $file_name . '.' . $type;
            if (!file_exists($upload_file)) {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                    $success['upload'] = "Upload file thành công";
                }
            }
        } else {
            $error['size'] = "File phải có kích thước nhỏ hơn 20MB";
        }
    }
    if (empty($error)) {
        if (file_exists($upload_file)) {
            $upload_file = $file_dir . $file_name . ' - Copy' . '.' . $type;
        }
        $i = 2;
        while (file_exists($upload_file)) {
            $upload_file = $file_dir . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
            $i++;
        }
        echo $upload_file;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            $success['upload'] = "Upload file thành công";
        }
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

        p.error {
            color: #e74c3c;
        }

        p.success {
            color: #2ecc71;
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
        <?php if (!empty($error)) echo file_error() ?>
        <?php if (!empty($success)) echo file_success() ?>
        <input type="submit" name="send_file" value="Send file">
    </form>
</body>

</html>