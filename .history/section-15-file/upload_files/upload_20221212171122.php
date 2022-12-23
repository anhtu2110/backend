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
