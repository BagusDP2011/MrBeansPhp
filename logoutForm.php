<?php

include("koneksi.php");

session_start(); // Ensure session is started
var_dump($_POST);
$_POST['logout'] = true;

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page after logout
header("Location: login.php");
exit;
?>