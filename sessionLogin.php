<?php
session_start(); 
?>
<html>
<body>
    <form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Enter username: </td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>Enter password: </td>
                <td><input type="password" name="pswd" id="pswd"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="Submit"></td>
                <a href="session.php">Click to Visit Session Page.</a>

            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST["btn"])){
        $_SESSION["username"] = $_POST["fname"];
        $_SESSION["password"] = $_POST["pswd"];
        echo "Session Variables are set...";
        echo " <br> Login Successfully...";
        header("session.php");
        
    }
    ?>
</body>
</html>
