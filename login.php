<?php
if ($_POST){
    $host="localhost";
    $user="root";
    $pass="";
    $db="marinelifedb";
    
        $username=$_POST['usrnm'];
        $password=$_POST['pwd'];

        $conn=mysqli_connect($host, $user, $pass, $db);
        $query="SELECT * FROM registration WHERE username='$username' and pswrd='$password'";
        $result=mysqli_query($conn, $query);
        
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['marinelifedb']='true';
                header('location:donates.php');
            }
            else{
                echo 'Wrong username/password';
            }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="/images/pnglogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="login.css">
    <title>Marine Life Conservation</title>
</head>
<body>
     <!--Login Form-->
<div class="container">
    <div class="container1">
        <div class="title">Login</div>
        <form method="POST">
            <div class="user-info">
                <div class="input-box">
                    <span class="information">Username</span>
                    <i class="fa fa-tag"></i>
                    <input type="text" placeholder="Enter Your Username"  name="usrnm" minlength="5" maxlength="20" required>
                </div>
                <div class="input-box">
                    <span class="information">Email Address</Address></span>
                    <i class="fa fa-envelope"></i>
                    <input type="email" pattern=".+@gmail.com" placeholder="Enter Your Email Address" name="email" title="Must contain '@' symbol, and do note that only gmail is accepted" required>
                </div>
                <div class="input-box">
                    <span class="information">Password</span>
                    <i class="fa fa-lock"></i>
                    <input type="password" id="pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" title="Must contain at least one number and a special character, an uppercase and lowercase letter, and at least 8 or more characters but doesn't exceed 16" name="pwd" placeholder="Enter Your Password" required>
                    <span style="float: right; margin-top: 2px;"> Show Password</span><span class="eye"> <input type="checkbox" onclick="toggle()" style="width: 20px;margin-left: 10px;height: 20px;margin-top: 3px;"></i></span>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Submit">
            </div>
            
            <div class="Login">
            <p>Don't Have An Account Yet? <a href="Registration.php">Sign Up Here</a></p>
             </div>
             <div class="back">
            <a href="homepage.php">Back To Home</a>
            </div>
        </form>
    </div>
</div>

 <!--SHow Password Toggle-->
 <script>
    var state = false;
    function toggle(){
        if(state){
           document.getElementById("pass").setAttribute("type", "password");
           state = false;
        }
        else{
           document.getElementById("pass").setAttribute("type", "text");
           state = true;
        }
    }
</script>
</body>
</html>