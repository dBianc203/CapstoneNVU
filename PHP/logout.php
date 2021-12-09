<?php
// Referenced CIS4520 final project/ login system for banking page
// Initialize the session
session_start();

// Frees all session variables from logging in
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect the user to the login page
header("location: login.php");
exit;
?>
