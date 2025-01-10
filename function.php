<?php
function getBooksListed() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS count FROM books");
    $row = $result->fetch_assoc();
    return $row['count'];
}

function getBooksNotReturned() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS count FROM books WHERE returned = 0");
    $row = $result->fetch_assoc();
    return $row['count'];
}

function getRegisteredUsers() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS count FROM users");
    $row = $result->fetch_assoc();
    return $row['count'];
}

function getListedAuthors() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS count FROM authors");
    $row = $result->fetch_assoc();
    return $row['count'];
}
?>