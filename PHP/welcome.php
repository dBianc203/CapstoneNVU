<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <style>
        body
          { font: 14px
          sans-serif;
          text-align: center;
          }
    </style>
</head>
<body>
    <h1 class="my-5">Thank you for logging in </h1>
    <p>
        <a href="index.html">Click here to continue to the website</a> <br>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>
</body>
</html>