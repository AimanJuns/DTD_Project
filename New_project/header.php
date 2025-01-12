<?php include 'databaselink.php';

$sql = "SELECT * FROM tajukwebsite";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>

<div class="header">
  <h1><?php echo $row["title_name"]?></h1>
  <p><?php echo $row["description"]?></p>
</div>

<?php
  }
} else {
  echo "0 results";
}
