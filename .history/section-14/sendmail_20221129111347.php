<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPDebug = 2;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //Thiết lập email gửi
    $mail->Username   = 'sendmail2110@gmail.com';                     //SMTP username
    $mail->Password   = 'Anhtu21102003';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    //setFrom nghĩa là thư này được gửi từ đâu
    $mail->setFrom('sendmail2110@gmail.com', 'Đào Anh Tú');
    //addAddress là địa chỉ người nhận
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addAddress('daotu2110@gmail.com');
    // addReplyto là sau khi nhận họ có thể trả lời tới mail nào       
    $mail->addReplyTo('sendmail2110@gmail.com', 'Đào Anh Tú');
    //addCC và addBCC là thêm địa chỉ nhận câu trả lời
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //Đính kèm
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    //Nôi dung gửi
    $mail->isHTML(true);                                  //Set email format to HTML
    //subject: tiêu đề
    $mail->Subject = '[PHP MASTER]Gửi mail từ Unitop';
    $mail->Body    = 'Thông tin được gửi từ chương trình <b>PHP Master</b>';
    //AltBody : mail gửi định dạng không dùng HTML
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Đã gửi thành công';
} catch (Exception $e) {
    echo "Email không gửi được, Chi tiết lỗi: {$mail->ErrorInfo}";
}
/**
 * Đầu tiên cần phải cấu hình server
 * Thông tin tài khoản 
 * Thiết lập thông tin gửi từ đâu
 * Người nhận
 * 
 */
