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

$sql = "INSERT INTO registration (fname,lname,eml,pwd,cpwd,gender,cstate) 
VALUES( '$_POST[fname]','$_POST[lname]','$_POST[eml]','$_POST[pswd]','$_POST[cpswd]','$_POST[gender]','$_POST[State]')";



// echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location:selectall.php");
$conn->close();
?>