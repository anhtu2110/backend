<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<br>";
        print_r($data);
        echo "</br>";
    } else {
        echo "Không phải là mảng hoặc không tồn tại mảng trên hệ thống";
    }
}
show_array($_FILES['files']);
show_array($_POST['files']);
