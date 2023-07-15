<?php
require_once("DB_Connection.php");
$sql = "SELECT * FROM registration where uid=".$_GET['uid'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing</title>
    <link rel="stylesheet" href="Registration.css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <div class="form-container"></div>
        <form action="update.php" method="post">
        <?php echo  '<input type="hidden" name="id" value="'.$_GET['uid'].'"/>';
         ?>
            <div class="input-Name">
                <i class="fa fa-user Lock"></i>
            <?php
              echo '<input type="text" placeholder="First name" class="name" name="fname" value="'.$row['fname'].'" required="">';
              
            ?>
                <span>
                    <i class="fa fa-user Lock"></i>
                    <?php
                   echo '<input type="text" placeholder="Last name" class="name" name="lname" value="'.$row['lname'].'" required="">';
                   ?>
                </span>
            </div>

            <div class="input-Name">
                <i class="fa fa-envelope Lock"></i>
                <?php
               echo '<input type="text" placeholder="Email" class="text-name" name="eml" value="'.$row['eml'].'" required="">';
               ?>
            </div>

            <div class="input-Name">
                <i class="fa fa-unlock-alt Lock"></i>
                <?php
                echo '<input type="text" placeholder="Password" class="text-name" name="pwd" value="'.$row['pwd'].'" required="">';
                ?>
            </div>

            <div class="input-Name">
                <i class="fa fa-unlock-alt Lock"></i>
                <?php
               echo '<input type="text" placeholder="Confirm Password" class="text-name" name="cpwd" value="'.$row['cpwd'].'" required="">';
               ?>
            </div>

            <div class="input-Name">
               <input type="radio" class="radio-button" name="gender" value="Male" >
               
               <label style="margin-right: 30px;">Male</label>

               <input type="radio" class="radio-button" name="gender" value="Female" value="'.$row['uname'].'" required="">
        
                <label>Female</label>   
            </div>

            <div class="input-Name">
                <select name="State" class="text-name">
                    <option name="State" value="State">Select a State</option>
                    <option name="State" value="Bihar">Bihar</option>
                    <option name="State" value="Gujarat">Gujarat</option>
                    <option name="State" value="Delhi">Delhi</option>
                    <option name="State" value="Mumbai">Mumbai</option>
                    <option name="State" value="Rajsthan">Rajsthan</option>
                    <option name="State" value="M.P">M.P</option>
                    <option name="State" value="Punjab">Punjab</option>
                    <option name="State" value="Chenai">Chenai</option>
                    <option name="State" value="Asam">Asam</option>
                    <option name="State" value="Amartisar">Amartisar</option>
                </select>
                <!-- <div class="arrow"></div>    -->
             </div>

             <div class="input-name">
        
                <input type="checkbox"  id="cb" class="check-button">
            
                <label for="cb" class="check">I Accept the terms and conditions</label>
             </div>
             <!-- <div class="input-name">
                <label for="cb">Already have an account <a href="Login.html"><b> Login</b></a></label>
             </div> -->

             <div class="input-Name">
                <input type="submit" class="button" value="Register">
            
                
             </div>
           </div>
        </form>

    </div>
    
</body>
</html>