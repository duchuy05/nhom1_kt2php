<?php
    @include("connection.php");
    $email = $_POST['email'];
    $tentaikhoan = $_POST['tentaikhoan'];
    $password = $_POST['password'];

    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "doanhuy0504@gmail.com";
    $mail->Password = "kijkazfnvpemaezy";
    $mail->SetFrom("doanhuy0504@gmail.com");
    $mail->Subject = "Verify Account";
    $mail->Body = "<p> Bạn đã đăng ký với tên tài khoản là: '$tentaikhoan', mật khẩu là '$password'</p> <br> <p> Nhấn kích hoạt để xác thực kích hoạt tài khoản </p>
    <br><br><a href='http://localhost/Nhom1_KT2/xacthuctaikhoan.php?email=$email&password=$password&tentaikhoan=$tentaikhoan'><button type='button'>Kích hoạt</button></a>";
    $mail->AddAddress("$email");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
     header("location:dangnhap.php");
   

?>