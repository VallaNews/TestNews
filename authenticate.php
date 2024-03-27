<?php
// Start a session
session_start();

// Simulated credentials (replace with your actual authentication logic)
$valid_username = "valla";
$valid_password = "news";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Set session variables
        $_SESSION['username'] = $username;

        // Redirect to main page
        header("Location: index.html");
        exit;
    } else {
        // Redirect back to login page with error message
        header("Location: login.php?error=invalid_credentials");
        exit;
    }
} else {
    // Redirect to login page if accessed directly
    header("Location: login.php");
    exit;
}
?>
