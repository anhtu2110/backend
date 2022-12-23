<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "Không phải là mảng hoặc không tồn tại mảng trên hệ thống";
    }
}
if (isset()) {
    # code...
}
show_array($_FILES['file']);

// Thư mục chứa file upload
$upload_dir = "uploads/";
$upload_file = $upload_dir . $_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";
} else {
    echo "Upload file không thành công.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng quan upload file lên server</title>
</head>

<body>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <form action="" enctype="multipart/form-data" method="POST">
        <label for="file">Send this file</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="send_file" value="Send File">
    </form>
</body>

</html>