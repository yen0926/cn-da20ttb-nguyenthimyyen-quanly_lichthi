<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Định dạng giao diện */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      width: 400px;
      height: 500px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-container h2 {
      text-align: center;
      font-size: 35px;
    }
    .input-group {
      margin-bottom: 15px;
    }
    .input-group label {
      display: block;
      margin-bottom: 5px;
    }
    .input-group input[type="text"],
    .input-group input[type="password"] {
      width: 90%;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    .input-group input[type="submit"] {
      width: 60%;
      padding: 10px;
      border-radius: 3px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .input-group input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .login_remember{
    text-align: left;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
}
  </style>
</head>
<body>
    <div align="left" class="login-container">
    <img align="center" src="image/tvu_set.png" height="150px" width="370px" alt="logo">
    <h2>Đăng nhập</h2>
    <form action="#" method="post">
      <div class="input-group">
        <label for="username">Email:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
        <div class="login_remember">
                    <input id="remember_pw" type="checkbox">
                    <label for="remember_pw">Nhớ mật khẩu</label>
        </div>
      </div>
      <div class="input-group">
        <input type="submit" value="Đăng nhập">
      </div>
    </form>
  </div>
</body>
</html>