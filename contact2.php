<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="/images/pnglogo.png">
    <link rel="stylesheet" href="contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <title>Marine Life Conservation</title>
</head>
<body>


    <!--Nav Bar-->
    <nav>
        <section class="title" id="top">
                <div class="header">
                    <div class="innerheader">
                        <div class="logo">
                            <img src="images/nav-logo.png" style="width: 80px;height: 70px;"><h1>MARINE<span>life</span></h1>
                        </div>
                        <ul class="navigation">
                            <li><a href="homepage2.php">Home</a></li>
                            <li><a href="action2.php">Conservation</a></li>
                            <li><a href="About us2.php">About us</a></li>
                            <li><a href="donates.php">Donate</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a class="contact-btn" href="contact2.php"><span style="color: black;">Contact Us</span></a></li>
                        </ul>
                    </div>
                </div>
	</nav>
     <!--End of Nav Bar-->

    <!--Contact Form-->
    <div class="container">
        <div class="container1">
            <div class="title">Send Us Your Message</div>
            <form action="https://formspree.io/f/xyyvqvnn" method="POST">
                <div class="user-info">
                    <div class="input-box">
                        <label class="information">Name</label>
                        <input type="text" placeholder="Enter Your Name" name="name" maxlength="30" minlength="5" required>
                    </div>
                    <div class="input-box">
                        <label class="information">Email Address</label>
                        <input type="email" pattern=".+@gmail.com" placeholder="Enter Your Email" title="Note that only gmail is accepted (@gmail.com)" name="email" required>
                    </div>
                    <div class="input-box">
                        <label class="information">Subject</label>
                        <input type="text" placeholder="Enter Subject" name="subject" required>
                    </div>
                    <div class="input-box" id="msg-input">
                        <label class="information">Message</label>
                        <textarea name="message" placeholder="How Can We Help You?" required></textarea>
                    </div>
                </div>
                <div class="button">
                <input type="submit" value="Send Message">
                </div>
            </form>
        </div>
    </div>
     <!--End of Contact Form-->

    <!--footer-->
    <footer class="footer">
        <div class="foot-container">
            <div class="row">
                <div class="footer-col">
                   <div class="logo">
                       <h1>MARINE<span>life</span></h1>
                   </div>
                </div>
                <div class="footer-col">
                    <h4>More From Us</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">0923-445-6781</a></li>
                        <li><a href="#">0945-332-8755</a></li>
                        <li><a href="#">0912-934-7766</a></li>
                    </ul>
                </div>
                 <div class="footer-col">
                    <h4>Email Us</h4>
                    <ul>
                        <li><a href="#">123@gmail.com</a></li>
                        <li><a href="#">Abc@gmail.com</a></li>
                        <li><a href="#">YMC@gmail.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Address</h4>
                    <ul>
                        <li><a href="#">120 MacArthur Hwy, Valenzuela, 1440 Metro Manila</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <hr style="margin-top: 30px; margin-bottom: 0;width:90%;">
				<h4 class="foot-note"><span style="color: #868686">@</span><span style="color: skyblue;"> Marine Life</span><span style="color: #868686;"> All Rights Reserved</span></h4>	
    </footer>
    <!--End of footer-->
</body>
</html>