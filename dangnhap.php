<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
</script>
</head>
<style>
  /* CSS để điều chỉnh cỡ ảnh captcha */
  #captcha-image {
    max-width: 100%; /* Đảm bảo rằng ảnh captcha không vượt quá chiều rộng của container */
    height: auto; /* Đảm bảo tỷ lệ khung hình được giữ nguyên */
    display: inline-block; /* Đặt ảnh captcha là một khối inline để nó hiển thị trên cùng một dòng với phần nhập */
    vertical-align: middle; /* Canh chỉnh theo chiều dọc với các phần tử khác */
  }
  /* CSS để điều chỉnh cỡ phần nhập */
  #captcha {
    vertical-align: middle; /* Canh chỉnh theo chiều dọc với các phần tử khác */
  }
</style>
<body>
<div class="container">
  <h2>Đăng nhập</h2>
  <form action="xulydangnhap.php" method="POST">
  <input type="hidden" name="captcha-rand" value="<?php echo $_SESSION["captcha_code"]; ?>"> <!-- để lấy mã captcha ngẫu nhiên và truyền vào một input ẩn để gửi đi-->
    <div class="form-group">
      <label for="email">Email: </label>
      <input type="email" class="form-control" id="email" placeholder="Điền tên tài khoản" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
    </div>
    <div class="row">
  <div class="col-md-6 form-group">
    <label for="captcha">Captcha:</label>
    <input type="text" class="form-control" id="captcha" placeholder="Nhập Captcha" name="captcha">
    <input type="hidden" name="captcha_code" value="<?php echo $_SESSION["captcha_code"]; ?>">
  </div>
  <div class="col-md-6 form-group" >
    <label for="captcha-image">Mã Captcha:</label><br> <!-- Thêm dấu xuống dòng để hình ảnh captcha và phần nhập captcha xuất hiện cùng dòng -->
    <img id="captcha-image" src="captcha.php">
  </div>
</div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
    </div>
  </form>
  <div>
    <p>Bạn chưa có tài khoản? <a href="dangky.php">Đăng ký</a></p>
  </div>
</div>
</body>
</html>
