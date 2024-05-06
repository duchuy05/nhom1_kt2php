<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");
    $email=$_GET["email"];
    $password=$_GET["password"];
    $tentaikhoan=$_GET["tentaikhoan"];
    $sql_check = "SELECT * FROM taikhoan WHERE tentaikhoan = '$tentaikhoan' or email = '$email'";
    $result_check = $ocon->query($sql_check);

    if ($result_check->num_rows > 0) {
    // Nếu có bản ghi trùng lặp, hiển thị thông báo lỗi
    echo '<script type="text/javascript">
        window.onload = function() {
            alert("Tên tài khoản hoặc email đã tồn tại trong cơ sở dữ liệu.");
            window.location.href = "dangky.php";
        }
      </script>';
    }
    else{
            $sql = "INSERT INTO taikhoan (email, tentaikhoan, matkhau, trangthai) 
                    VALUES ('$email' ,'$tentaikhoan', '$password', 1)";

            if($ocon->query($sql) === TRUE) {
                header("location:dangnhap.php");
            } else {
                echo "Lỗi: " . $sql . "<br>" . $ocon->error;
            }
        }
    ?>
    <h1>Xác thực kích hoạt tài khoản thành công</h1>
</body>
</html>