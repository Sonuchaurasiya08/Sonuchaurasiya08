<?php

session_start();
echo "Hi ". $_SESSION["username"];
?>

<html>

<body>
<a href="sessionLogin.php" name="logout">LogOut</a>
    <?php 
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
    }
    ?>
    
</body>

</html>