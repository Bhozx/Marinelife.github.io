<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="/images/pnglogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <title>Marine Life Conservation</title>
</head>
<body>


    <!--Registration Form-->
<div class="container">
    <div class="container1">
        <div class="title">Sign Up</div>
        <form action="Summary_page.php" method="POST">
            <div class="user-info">
                <div class="input-box">
                    <span class="information">First Name</span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Enter Your Firstname" name="firstname" maxlength="30" required>
                </div>
                <div class="input-box">
                    <span class="information">Last Name</span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Enter Your Lastname" name="lastname" maxlength="30" required>
                </div>
                <div class="input-box">
                    <span class="information">Username</span>
                    <i class="fa fa-tag"></i>
                    <input type="text" placeholder="Enter Your Username"  name="username" minlength="5" maxlength="20" required>
                </div>
                <div class="input-box">
                    <span class="information">Password</span>
                    <i class="fa fa-lock"></i>
                    <input type="password" id="pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" title="Must contain at least one number and a special character, an uppercase and lowercase letter, and at least 8 or more characters but doesn't exceed 16" name="pwd" placeholder="Enter Your Password" required>
                    <span style="float: right; margin-top: 2px;"> Show Password</span><span class="eye"> <input type="checkbox" onclick="toggle()" style="width: 20px;margin-left: 10px;height: 20px;margin-top: 3px;"></i></span>
                </div>
             
                <div class="input-box">
                    <span class="information">Email Address</Address></span>
                    <i class="fa fa-envelope"></i>
                    <input type="email" pattern=".+@gmail.com" placeholder="Enter Your Email Address" title="Note that only gmail is accepted (@gmail.com)" name="email" required>
                </div>
                <div class="input-box">
                    <span class="information">Phone Number</span>
                    <i class="fa fa-cell fa-phone"></i>
                    <input type="text" pattern="((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}" name="number"
                    placeholder="Enter 11 Digit Phone Number" 
                    title="
                    Accepted Formats:
                    (0.917.123.4567)
                    (0-917-123-4567)
                    (0 917 123 4567)
                    (09171234567), and 11 digits"
                    maxlength="16"
                    required>
                </div>
            </div>
            <div class="user-gender">
                    <input type="radio" name="gender" id="btn1" value="Male" required>    
                    <input type="radio" name="gender" id="btn2" value="Female" required>         
                    <div class="option">
                        <label for="btn1">
                            <span class="btn one"></span>
                            <span class="gender">Male</span>
                            <i class="fa fa-male"></i>
                        </label>
                        <label for="btn2">
                            <span class="btn two"></span>
                            <span class="gender">Female</span>
                            <i class="fa fa-female"></i>
                        </label>
                        <label>
                            <span class="check"></span>
                            <input type="checkbox" required>
                            <span class="term">I agree to the terms of use and privacy policy</span>
                           
                        </label>
                    </div>
                </div>
            <div class="button">
                <input type="submit" value="Submit">
            </div>
            
            <div class="Login">
            <p>Already Have An Accout? <a href="login.php">Login Here</a></p>
             </div>
             <div class="back">
            <a href="homepage.php">Back To Home</a>
            </div>
        </form>
    </div>
</div>

 <!--End of Registration Form-->

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