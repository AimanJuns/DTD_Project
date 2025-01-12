<?php
// Start session
session_start();

include 'databaselink.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form input values
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<h2>Passwords do not match. Please try again.</h2>";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username already exists
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>Username already exists. Please choose another.</h2>";
        exit;
    }

    // Insert new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($query) === TRUE) {
        echo "<h2>Registration successful! You can now <a href='home.html'>login</a>.</h2>";
    } else {
        echo "<h2>Error: " . $conn->error . "</h2>";
    }
}

// Close the connection
$conn->close();
?>