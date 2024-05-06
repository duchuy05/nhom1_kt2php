<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng ký</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Đăng ký</h2>
  <form action="xulydangky.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Điền email" name="email">
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="email">Tên tài khoản: </label>
      <input type="text" class="form-control" id="tentaikhoan" placeholder="Điền tên tài khoản" name="tentaikhoan">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Đăng ký</button>
  </form>
</div>

</body>
</html>
