<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect them to the login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
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
    <h1>Thank you for logging in </h1>
    <p>
        <!-- change when working with php to index.php for session -->
        <a href="\">Click here to continue to the website</a> <br>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>
</body>
</html>
