M<?php
    $sent_to_email = "daotu2110@gmail.com";
    $sent_to_fullname = "Đào Anh Tú";
    $subject = 'Test hàm send_mail()';
    $content = 'Nội dung email gửi từ hàm <b>send_mail()</b>';
    $option = array();
    send_mail(
        $sent_to_email,
        $sent_to_fullname,
        $subject,
        $content,
        $option = array()
    );
    if (send_mail(
        $sent_to_email,
        $sent_to_fullname,
        $subject,
        $content,
        $option = array()
    )) {
        echo "Gửi mail thành công";
    } else {
        echo "Gửi mail không thành công.";
    }

    ?>
<div id="content">
    <h1>Trang chủ</h1>
</div>