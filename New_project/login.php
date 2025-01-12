<?php
session_start();
//$db = new mysqli('localhost', 'your_username', 'your_password', 'auth_system');

include 'databaselink.php';

//if ($db->connect_error) {
 //   die("Connection failed: " . $db->connect_error);
//}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
           // echo "<h2>Welcome, $username!</h2>";
        } else {
            echo "<h2>Invalid password. Please try again.</h2>";
           echo "<h2>Invalid password. Please try again.</h2>";
        }
    } else {
        echo "<h2>Welcome, $username!, $password</h2>";
    }
} else {
    header('Location: home.html');
    exit;
}
?>