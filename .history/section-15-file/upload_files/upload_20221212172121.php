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
show_array($_FILES['file']);

// Thư mục chứa file upload
$upload_dir = "uploads/";
$upload_file = $upload_dir . $_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "<a href='$upload_file'>Download: {$upload_file}</a>";
} else {
    echo "Upload file không thành công.";
}
