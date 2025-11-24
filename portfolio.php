<html>
<head>
  <title>Portfolio Login</title>
  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, sans-serif;
      background: #f3e6bb;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      width: 450px;
      box-shadow: 0px 2px 2px;
    }

    .head-box {
      background: navy;
      color: white;
      padding: 30px;
      text-align: center;
    }

    .head {
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .head-sub {
      font-size: 16px;
    }

    .form {
      padding: 40px 30px;
    }

    .infobox {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      padding: 15px;
      background: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0px 1px 1px;
    }

    .user {
      background: #e67e22;
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      font-weight: bold;
      font-size: 14px;
    }

    .guest {
      background: #3498db;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
    }

    .guest:hover {
      background: #2980b9;
    }

    .box {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 2px 2px;
    }

    .box input[type="text"] {
      width: 100%;
      padding: 15px;
      border: 2px solid #e9ecef;
      border-radius: 10px;
      font-size: 16px;
      margin-bottom: 20px;
      background: white;
    } 

    .box input[type="password"] {
      width: 100%;
      padding: 15px;
      border: 2px solid #e9ecef;
      border-radius: 10px;
      font-size: 16px;
      margin-bottom: 20px;
      background: white;
    }

    .box input[type="submit"] {
      width: 100%;
      padding: 15px;
      background: #3498db;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    .box input[type="submit"]:hover {
    background: #2980b9;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <div class="head-box">
      <div class="head">Portfolio</div>
      <div class="head-sub">Login Portal</div>
    </div>

    <div class="form">
      <div class="infobox">
        <div class="user">Ankush 🔒</div>
        <button type="submit" form="login" class="guest">Guest</button>
      </div>

      <div class="box">
        <form id="login" action="portfoliologin.php" method="POST">
          <input type="text" name="username" placeholder="Enter Username" required>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" value="Log In">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
