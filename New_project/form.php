<html>
  <head>
    <link rel="stylesheet" href="layout.css">
  <style>
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    display: flex;
    flex-direction: column;
  	allign item: center;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007bff;
    outline: none;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="submit"] {
  	height: 40px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
  	font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

      
input[type="submit"]:hover {
    background-color: #0056b3;
}      
    </style>
  </head>
<body>

  <?php 
  include 'header.php';
  include 'menu.php';
  ?>
  
<div class="row">
    <div class="card">
      <h2>Form</h2>
      <div class="fakeimg">  
    <form action="Welcome.php" method="POST">
	Name: <input type="text" name="Name" placeholder="Your Name"><br>
	Height: <input type="text" name="Height" placeholder="Height in Meter(m)"><br>
	Weight: <input type="text" name="Weight" placeholder="Weight in kg(kg)"><br>
	Gender: <input type="text" name="Gender" placeholder="Your Gender"><br>  
	<input type="submit">
  	</form>
      </div>
    </div>
  </div>

</body>
</html>