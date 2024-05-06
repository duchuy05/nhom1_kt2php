<?php
include("connection.php");

$email = $_POST["email"];
$password = $_POST["password"];
$captcha = $_POST['captcha']; // Thay đổi tên biến để phù hợp với tên input trong form
$captcha_random = $_POST['captcha-rand']; // Thay đổi tên biến để phù hợp với tên input trong form

if(isset($_POST['login'])) {
    session_start(); // Bắt đầu hoặc tiếp tục session
    if($captcha != $_SESSION['captcha_code']) { // So sánh mã captcha người dùng nhập với mã captcha được lưu trong session
        echo '<script type="text/javascript">alert("Nhập sai mã Captcha"); window.location.href = "dangnhap.php";</script>';
    } else {
        $sql = "SELECT * FROM taikhoan WHERE email='$email'";
        $result = $ocon->query($sql);
        
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['matkhau'] == $password) {
                $_SESSION["email"] = $email;
                header("location:trangchu.php");
            } else {
                echo '<script type="text/javascript">alert("Tài khoản hoặc mật khẩu không đúng"); window.location.href = "dangnhap.php";</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Tài khoản không tồn tại"); window.location.href = "dangnhap.php";</script>';
        }
    }
}
?>
