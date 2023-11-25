<?php
include("koneksi.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate form data (add more validation as needed)
    // if (empty($username) || empty($password)) {
    //     // Handle validation errors (for example, redirect back to the login page with an error message)
    //     header("Location: login.php?error=empty_fields");
    //     exit();
    // }

    // Check the username and password against the database (replace with your actual table and column names)
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // if (password_verify($password, $row["password"])) {
        if ($password === $row["password"]) {
            // Set session variables upon successful login
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $row['fullName']; // Assuming the column name is 'fullName'

            // Redirect to the index page or any other authenticated page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            header("Location: login.php?error=incorrect_password");
            exit();
        }
    } else {
        // User not found
        header("Location: login.php?error=user_not_found");
        exit();
    }
}
?>
