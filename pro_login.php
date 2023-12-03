<?php
if (!isset($_SESSION)) {
  session_start();
}
;
include('config/connect.php');

if (isset($_POST['name']) && isset($_POST['password'])) {
  $error    = 0;
  $username = htmlentities(stripcslashes(strtolower($_POST['name'])));
  $password = stripcslashes(password_hash($_POST['password'], PASSWORD_DEFAULT));
  $md5_pass = md5($_POST['password']);
  $username = filter_input(INPUT_POST, 'name');
  $username = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
  $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));

  if (isset($_POST['sign'])) {
    $sign_in = htmlentities(mysqli_real_escape_string($conn, $_POST['sign']));
    if ($sign_in == 1) {
      setcookie('name', $username, time() + 1800, "/");
      setcookie('password', $password, time() + 1800, "/");

    }
  }

  if (empty($username) || filter_var($username, FILTER_VALIDATE_INT)) {
    $username_error = "<p style='color:red'>Please,Enter Your Username.</p>";
    $error = 1;
  }
}

if (empty($password)) {
  $password_error = "<p style='color:red'>Please,Enter Your Password.</p>";
  $error = 1;
}
if (!isset($error)) {
  $mysql = "SELECT id,name FROM users WHERE name = '$username' AND md5_pass = '$md5_pass' limit 1";
  $reult = mysqli_query($conn, $mysql);
  $num_r = mysqli_num_rows($reult);
  if ($num_r != 0) {
    $row = mysqli_fetch_assoc($reult);
    if ($row['name'] === $username && $row['password'] === $password) {
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
    }
  }
}
if ($error == 0) {
  $sql = "SELECT name,password FROM users WHERE name = '$username' AND password = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $user_valid = "<p style='color:green'>Login successfully..!</p>";
  } else {
    $user_error = "<p style='color:red'>Your Username or Password not Found..!</p>";
  }
  header("Location:main.php");
}

?>