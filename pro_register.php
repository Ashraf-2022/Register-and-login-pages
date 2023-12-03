<?php
include("config/connect.php");

if (isset($_POST['submit'])) {
  $error = 0;
  $name     = stripcslashes(strtolower($_POST['name']));
  $name     = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
  $email    = stripcslashes($_POST['email']);
  $email    = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
  $md5_pass = password_hash($password, PASSWORD_DEFAULT);
  if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
    $day    = (int) $_POST['day'];
    $month  = (int) $_POST['month'];
    $year   = (int) $_POST['year'];
    $date   = htmlentities(mysqli_real_escape_string($conn, $day . "-" . $month . "-" . $year));
  }

  if (isset($_POST['gender'])) {
    $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['gender']));
    if (!in_array($gender, ['male', 'female'])) {
      $gender_error = '<p style="color:red">Gender must be male or female </p>';
      $error = 1;
    }
  } else {
    $gender_error = '<p style="color:red">Gender must be Entered </p>';
    $error = 1;
  }
  $check        = "SELECT * FROM USERS WHERE name = '$name'";
  $check_result = mysqli_query($conn, $check);
  $rows         = mysqli_num_rows($check_result);
  if ($rows == 1) {
    $user_error = "<p style='color:red'>This Username already exist .</p>";
    $error = 1;
  }

  if ($rows == 1) {
    $email_error = "<p style='color:red'>Username is already taken. Choose a different username</p>";
    $error = 1;
  }

  if ($rows == 1) {
    $password_error = "<p style='color:red'> Password is already taken. Choose a different password.</p>";
    $error = 1;
  }

  if (empty($name) || strlen($name) < 6 || filter_var($name, FILTER_VALIDATE_INT)) {
    $user_error = '<p style="color:red">Username must be a valid name with at least 6 characters </p>';
    $error = 1;
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = '<p style="color:red"> Please Enter a valid Email <p>';
    $error = 1;
  }

  if (empty($date)) {
    $date_error = ' <p style="color:red"> Date must be Entered and Complete the three choice </p>';
    $error = 1;
  }

  if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
    $password_error = '<p style="color:red"> Password must be entered and have at least 6 characters or numbers </p>';
    $error = 1;
  }

  if ($error == 0 && $rows == 0) {
    $sql_im = "INSERT INTO users (name, email, password, md5_pass, date, gender) VALUES('$name', '$email', '$password', '$md5_pass' , '$date', '$gender')";
    mysqli_query($conn, $sql_im);
    header('Location: index.php');
  }
}
?>