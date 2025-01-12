<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="layout.css">

</head>
<body>

<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: home.html');
    exit;
}
  
  include 'header.php';
  include 'menu.php';
  ?>

<div class="row">
    <div class="card">
      <h2>Display Data</h2>
<div class="fakeimg">
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background-color: #333; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Height</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Weight</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
			include 'database_link.php';

            $sql = "SELECT * FROM BMI";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["id"] . "</td>";
                    echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["Name"] . "</td>";
                    echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["Height"] . "</td>";
                    echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["Weight"] . "</td>";
                    echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row["Gender"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align: center; padding: 8px; border: 1px solid #ddd;'>No results found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

      </div>
    </div>
  <div class="rightcolumn">
  </div>
  
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
    $username = "D20221101857";
    $password = "Aiman2002@";
    $dbname = "D20221101857";

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

<?php include 'footer.php';?>

</body>
</html>


