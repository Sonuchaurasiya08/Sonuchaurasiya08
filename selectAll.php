<?php

require_once('DB_Connection.php');

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn,$sql);

?> 
<h2>Browse Users</h2>
<hr>
<table border="1">
<tr>
<td>user id</td>
<td>fname</td>
<td>lname</td>
<td>Email</td>
<td>pwd</td>
<td>cpwd</td>
<td>gender</td>
<td>State</td>

<td colspan="2">operations</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['uid'].'</td>
<td>'.$row['fname'].'</td>
<td>'.$row['lname'].'</td>
<td>'.$row['eml'].'</td>
<td>'.$row['pwd'].'</td>
<td>'.$row['cpwd'].'</td>
<td>'.$row['gender'].'</td>
<td>'.$row['cstate'].'</td>
<td><a href="Edit.php?uid='.$row['uid'].'">Edit</a></td>
<td><a href="delete.php?uid='.$row['uid'].'">Delete</a></td>
</tr>
';
}
?>
</table>