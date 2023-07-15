<?php
 require_once('DB_Connection.php');
//  require_once('Edit.php');

$sql = "UPDATE registration SET
fname='".$_POST['fname']."',lname='".$_POST['lname']."',eml='".$_POST['eml']."',
pwd='".$_POST['pwd']."',cpwd='".$_POST['cpwd']."',gender='".$_POST['gender']."',cstate='".$_POST['State']."'
WHERE uid=".$_POST['id'];

echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location:selectAll.php");
?>