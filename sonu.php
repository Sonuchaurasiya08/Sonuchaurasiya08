<?php
require_once("DB_Connection.php");
$sql = "SELECT * FROM user where uid=".$_GET['uid'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        html {
            height: 100%;
        }
        html{
            background-color: rgb(201, 235, 224);
        }
        body {
            margin: 10px;
            padding: 0;
            font-family: sans-serif;
            background-color: #f2eee3;
        }
        h1{
            background:transparent;
            background-color:rgb(201, 235, 224) ;
            padding-bottom: 20px;
        }
        .home_context{
            margin-top: -20px;
        }
        .home_context ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .home_context li{
            /* float: left; */
            border: 1px solid rgb(0, 134, 179);
            display: inline;
            border-block: white;
            text-align: center;
            padding: 14px 16px;
        }
         .home_context li a{
            color: white;
        }
        .container h2 {
            margin: 0 0 30px;
            padding: 0;
            text-align: center;
            color: aqua;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            margin-top: 170px;
            transform: translate(-50%, -50%);
            /*  transform take it to the middle */
            background: rgb(87, 105, 125);
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0px 15px 25px rgb(87, 105, 130);
        }

        .container .user_box {
            position: relative;
        }

        .container .user_box input {
            width: 100%;
            padding: 10px, 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #ffffff;
            outline: none;
            background: transparent;
        }

        .container .user_box label {
            position: absolute;
            top: -10px;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            pointer-events: none;
            transition: .5s;
        }
        .container .user_box input:focus ~ label,
        .container .user_box input:valid ~ label 
        {
            top: -25px; 
            left: 0;
            color: aqua;
            font-size: 12px;
        }
        
        .container form .submit_btn {
            position: relative;
            display: inline-block;
            padding: 10px 10px;
            /* margin-top: -20px; */
            margin: -10px;
            color: aqua;
            font-size: 16px;
            text-decoration: none;
            overflow: hidden;
            transition: .5s;
            margin-top: 15px;
            border-radius: 2px;
        }
        .container .submit_btn:hover{
            background: white;
            color: black;
            border-radius: 5px;
            box-shadow: 0 0 5px white,
                        0 0 25px white,
                        0 0 50px white,
                        0 0 100px white; 
        }
        .container form .login_btn {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            color: aqua;
            font-size: 16px;
            text-decoration: none;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            border-radius: 2px;
        }
        .container .login_btn:hover{
            background: white;
            color: black;
            border-radius: 5px;
            box-shadow: 0 0 5px white,
                        0 0 25px white,
                        0 0 50px white,
                        0 0 100px white; 
        }
    </style>
</head>

<body>
    <h1><u><b style="color:rgb(0, 134, 179)">R</b>ajkot <b style="color:rgb(0, 134, 179)">C</b>ity <b style="color:rgb(0, 134, 179)">G</b>uide </u></h1>
    <div class="home_context">
        <ul>
            <li style="float:left" ><a href="index.html">Home</a></li>
            <li style="float:right"><a href="Login.html">Log In</a></li>
            <li style="float:right"><a href="Contact_us.html">Conatact Us</a></li>
            <li style="float:right"><a href="about_us.html">About</a></li>

        </ul>
    </div>
    <div class="container">
        <h2>Register</h2>
        <form action="update.php" method="POST">
           <?php echo  '<input type="hidden" name="id" value="'.$_GET['uid'].'"/>'; ?>
            <div class="user_box">
                <?php
                echo '<input type="text" name="uname" value="'.$row['uname'].'" required="">';
                ?>
                <label>User name</label>
            </div> 
            <div class="user_box">  
            <?php
                echo '<input type="password" name="password" value="'.$row['password'].'" required="">';
                ?>
                <label>Password</label>
            </div>
            <div class="user_box">
            <?php
                echo '<input type="text" name="name" value="'.$row['name'].'" required="">';
                ?>
                <label>Name</label>
            </div>
            <div class="user_box">
            <?php
                 echo '<input type="email" name="email" value="'.$row["email"].'" required="">';
                ?>
                <label>Email</label>
            </div>
            <div class="user_box">
            <?php
                echo '<input type="phone" name="phone" value="'.$row["phone"].'" required="">';
                ?>
                <label>phone</label>
            </div>
            <div class="user_box">
            <?php
                echo '<input type="date" name="dob" value="'.$row["dob"].'">';
                ?>
            </div>
            <div class="submit_btn">
                <span></span>
                <span></span>
                <span></span> 
                <span></span>
                <button type="" class="registerbtn" name="Update">Update</button>
            </div>
                <p style="color: white">Already have an account? <a href="Login.html">Sign in</a>.</p>
    </form>
    </div>
</body>

</html>