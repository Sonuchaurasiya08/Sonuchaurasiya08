<?php
require_once('DB_Connection.php');

// $uid = $_POST['uid'];
 $sql = "DELETE FROM registration WHERE uid='".$_GET['uid']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

 header("location:selectAll.php");

$conn->close();
?>