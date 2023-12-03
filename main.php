<?php
if (!isset($_SESSION)) {
    session_start();
}

include "config/connect.php";

if (isset($_SESSION['name']) && isset($_SESSION['id'])) {
    $username = $_SESSION['name'];
    $id = $_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .welcome-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007;
            text-align: center;
        }

        p {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            background-color: #007;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            background-color: #005580;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Welcome To Our Website</h1>
        <p>This is a simple welcome page. Explore and enjoy!</p>
        <center><a href="index.php">Login</a></center>
    </div>
</body>

</html>

