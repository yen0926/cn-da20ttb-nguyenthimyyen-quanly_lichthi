<?php
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SendMail
{
    public static function Gmail($receiveMail, $receiveName, $subject, $body)
    {
        // Tạo một đối tượng PHPMailer mới
        $mail = new PHPMailer(true);

        try {
            // Cấu hình thông tin SMTP
            $mail->isSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'myyen3018@gmail.com';
            $mail->Password = 'cony dbcy dfbb nbbm';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->isHTML(true);

            // Thiết lập thông tin người gửi và người nhận
            $mail->setFrom('quanlylichthi@gmail.com', 'Kỹ thuật và công nghệ - TVU');
            $mail->addAddress($receiveMail, $receiveName);

            // Thiết lập tiêu đề và nội dung của email
            $mail->Subject = $subject;
            $mail->Body = $body;

            // Gửi email
            $mail->send();
            echo 'Email đã được gửi thành công.';
        } catch (Exception $e) {
            echo "Có lỗi xảy ra khi gửi email: {$mail->ErrorInfo}";
        }
    }
}
