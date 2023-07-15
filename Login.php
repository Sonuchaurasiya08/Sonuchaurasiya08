<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Website";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (username,pwd,cpwd) 
VALUES( '$_POST[Username]','$_POST[pwd]','$_POST[cpwd]')";



//echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location:selectall.php");
$conn->close();
?>