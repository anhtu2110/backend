<?php
$sent_to_email = "daotu2110@gmail.com";
$sent_to_fullname = "Đào Anh Tú";
$subject = 'Test hàm send_mail()';
$content = 'Xin chào';
$option = array();
if (send_mail(
    $sent_to_email,
    $sent_to_fullname,
    $subject,
    $content,
    $option = array()
)) {
    echo "<p style='color: green;'>Gửi mail thành công</p>";
} else {
    echo "<p style='color: color;'>Gửi mail không thành công.</p>";
}

?>
<div id="content">
    <h1>Trang chủ</h1>
</div>