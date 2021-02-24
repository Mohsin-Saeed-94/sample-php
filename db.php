<?php
$servername = "mohsintest-do-user-8524638-0.b.db.ondigitalocean.com:25060";
$username = "doadmin";
$password = "zjg4aauy66mr1xg0";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
