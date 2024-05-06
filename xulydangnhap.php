<?php
include("connection.php");

$password = $_POST["password"];
$email_or_username = $_POST["email_or_username"];
$captcha = $_POST['captcha']; // Thay đổi tên biến để phù hợp với tên input trong form
$captcha_random = $_POST['captcha-rand']; // Thay đổi tên biến để phù hợp với tên input trong form

if(isset($_POST['login'])) {
        session_start(); // Bắt đầu hoặc tiếp tục session
        $sql = "SELECT * FROM taikhoan WHERE (email='$email_or_username' or tentaikhoan = '$email_or_username')";
        $result = $ocon->query($sql);
        
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['matkhau'] == $password) {
                $_SESSION["email_or_username"] = $email_or_username;
                if($captcha != $_SESSION['captcha_code']) { // So sánh mã captcha người dùng nhập với mã captcha được lưu trong session
                    echo '<script type="text/javascript">alert("Nhập sai mã Captcha"); window.location.href = "dangnhap.php";</script>';
                }
                else {
                header("location:trangchu.php");
                }
            } else {
                echo '<script type="text/javascript">alert("Tài khoản hoặc mật khẩu không đúng"); window.location.href = "dangnhap.php";</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Tài khoản không tồn tại"); window.location.href = "dangnhap.php";</script>';
        }

    }
?>
