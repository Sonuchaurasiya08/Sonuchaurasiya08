<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="search" id="search"> <input type="submit" name="btn" value="Search">
    </form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "website");
    if (!$conn)    $sql = "SELECT cstate FROM registration WHERE fname = '$str'";
    
        die("Connection Failed") . mysqli_connect_error();
        // else 
        // echo "Connection Established";
    if (isset($_POST["btn"])) {
        $str = $_POST["search"];
        $result = mysqli_query($conn, $sql);
        // $fname="";
        while ($row = mysqli_fetch_assoc($result)) {
            // $fname = $row["fname"];
            $state =  $row["cstate"];
        }
    }
    ?>
    <table>
        <!-- <tr>Name is: </tr><br> -->
        <tr>State is : <?php echo $state; ?></tr>
    </table>
</body>

</html>