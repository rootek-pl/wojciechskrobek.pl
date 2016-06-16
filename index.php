<!DOCTYPE html>
<html>
<head>
<title>Wojciech Skrobek Home Page</title>
<script src="footerData.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
$servername = "mysql.hostinger.pl";
$username = "u693034799_test";
$password = "zaq12wsx";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

<header>Wojciech Skrobek</header>
<div class="row">
  <div class="col-3 menu">
    <nav>
      <ul>
	<li>About me</li>
	<li>Projects</li>
	<li>Contact</li>
      </ul>
    </nav>
  </div>
  <div class="col-9">
  </div>
</div>
<footer>Wojciech Skrobek 2016</footer>
</body>
</html>
