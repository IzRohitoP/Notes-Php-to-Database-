<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pratik";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname,4306);

// Check connection
if ($conn->connect_error) {
  echo"Connection failed: " . $conn->connect_error;
}
echo "Connected successfully\n";

$sql = "INSERT INTO temp
VALUES ('" .$_POST['name']. "'," . $_POST['phone']. ")";

if ($conn->query($sql) === TRUE) {
  echo "<br>". "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<br>". "<a href='PK.html'>Back</a>";
?>
