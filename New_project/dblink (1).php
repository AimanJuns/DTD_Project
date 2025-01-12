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
      <h2>Database Link</h2>
      <div class="fakeimg" style="height:200px;">Image</div>
        <?php
  include 'database_link.php';

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
    </div>
  </div>

<?php 
  include 'footer.php'; ?>

</body>
</html>


