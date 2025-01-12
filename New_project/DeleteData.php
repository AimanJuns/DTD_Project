<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="layout.css">
</head>
<body>

<?php 
  include 'header.php';
  include 'menu.php';
  ?>
  
<div class="row">
    <div class="card">
      <h2>Delete</h2>
      <div class="fakeimg">
      	<h2>Delete a Record</h2>

<form method="post" action="">
  <label for="id">Enter the ID of the record to delete:</label><br>
  <input type="number" id="id" name="id" required><br><br>
  <input type="submit" value="Delete Record">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; // Get the ID from the form input
    
    $servername = "localhost";
    $username = "D20221101850";
    $password = "AbC0055!z";
    $dbname = "D20221101850";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL delete query
    $sql = "DELETE FROM BMI WHERE id=?";
    $stmt = $conn->prepare($sql); // Use a prepared statement for security
    $stmt->bind_param("i", $id);  // Bind the `id` parameter

    if ($stmt->execute() === TRUE) {
        echo "Record with ID $id deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
      </div>
    </div>
  </div>
  <div class="rightcolumn">
  </div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>

