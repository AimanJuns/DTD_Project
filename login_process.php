<?php
// filepath: /C:/GroupAssignment/laragon/www/Library/login_process.php
<?php
session_start();
include 'database_link.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Replace with your query to check the username and password
$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    header('Location: index.php');
} else {
    echo "Invalid username or password";
}

$conn->close();
?>