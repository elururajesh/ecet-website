<?php
$servername = "184.168.98.160";
$username = "ecetuser";
$password = "ecetuser@1";
$dbname = "ecetdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, userpwd, description FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. " - password: " . $row["userpwd"]. "-Description " . $row["description"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>