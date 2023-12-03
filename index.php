<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      background-color: #e9e9e9;
    }

    .form {
      max-width: 400px;
      margin: 95px auto;
      background-color: #e1e1e1;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
      font-size: 20px;
    }

    .form .name, .pass, .sub {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }

    .form input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    h1 {
      text-align: center;
      color: #4caf50;
      margin-bottom: 20px;
    }

    .form .reg {
      background-color: #4caf50;
      color: white;
      padding: 8px 168px;
      margin-top: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
    }

    .form .reg:hover {
      background-color: #e1e1e1;
      transition: .5s;
      border: #000 1px solid;
    }

    h4 {
      text-align: center;
    }

    .avatar {
      vertical-align: middle;
      width: 80px;
      height: 80px;
      border-radius: 50%;
    }

    .form .sign input{
      width: 15px;
      height: 15px;
    }
  </style>
</head>
<body>
  <form action="" class="form" method="post">
    <center><img src="images/download (2).jpg" alt="Avatar" class="avatar"></center>
    <h1>Login Form</h1>
    <?php include('pro_login.php');if(isset($username_error)){echo $username_error;}?>
    <input type="text" name="name" placeholder="Username" class="name" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];}  ?>" ><br>
    <?php if(isset($password_error)){echo $password_error;}?>
    <input type="password" name="password" placeholder="Password" class="pass" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}  ?>" ><br>
    <?php include "pro_login.php"; if(isset($user_error)){echo $user_error;}?>
    <?php include "pro_login.php";if(isset($user_valid)){echo $user_valid;}?>
    <div class="sign">
      <input type="checkbox" name="sign" value="1" >Keep Me Sign In.
    </div>
    <input type="submit" name="send" class="sub" value="Submit"><br>
    <h4><i><u>OR</u></i></h4>
    <a href="register.php" class="reg" >Register</a>
  </form>
</body>
</html>