<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION["email"]))
    {
    ?>

        <a href="dangnhap.php">Đăng nhập</a>
        <br>
        <a href="dangky.php">Đăng ký</a>
        <br>
        
    <?php
    }
   
    else
    {
        echo "Xin chào:". $_SESSION['email'];
        
        echo "<a href='xllogout.php'>logout</a><br>";
    }
    ?>
</body>
</html>