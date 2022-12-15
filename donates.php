<?php
session_start();
if(!$_SESSION['marinelifedb']){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="/images/pnglogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donates.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
        <title>Marine Life Conservation</title>
        <link rel="icon" type="image/x-icon" href="images/nav-logo.png">
</head>
<body>
    <!--back to top-->
	<!--back to top-->
    <button onclick="topFunction()" id="toTop"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></i></button>


    <!-- Navigation Bar -->
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
     <!--Banner-->
    
        <div class= "textbox1">
            <div class="innertextbox1">
                <p style="font-family:'Times New Roman', Times, serif;">"Giving is not just about making a donation, it is about making a difference.
                    <br><br> -Kathy Calvin
                </p>
            </div>
        </div>
    </section>
  
    <!--Organizational Activities-->
<section class="slider-container">
    <h1>What Are We Doing To Help?</h1>
    <div class="w3-content w3-display-container">
        <div class="w3-display-container mySlides">
          <img src="images/beach-clean-sampsonite-frankston-vic_26077578847_o (1).jpg" style="width:100%;">
          <div class="w3-display-topleft w3-container w3-padding-16 w3-black" style="font-size: 20px;text-align: center;">
            <p>We urge leaders to preserve existing protections against special interests and fight against proposed weakening of regulations for these monuments. We urge Congress to adequately support research and monitoring of these special places.</p>
          </div>
        </div>
        
        <div class="w3-display-container mySlides">
          <img src="images/donate_pic1.jpeg" style="width:100%;height: 620px;">
          <div class="w3-display-bottomright w3-container w3-padding-16 w3-black "style="font-size: 20px;text-align: center;">
            <p>We work to ensure protection for at least 30% of the global ocean by 2030 — enough to safeguard life in the sea.</p>
          </div>
        </div>
        
        <div class="w3-display-container mySlides">
          <img src="images/research.jpg" style="width:100%;height: 620px;">
          <div class="w3-display-bottomleft w3-container w3-padding-16 w3-black" style="font-size: 20px;text-align: center;">
            <p>We research and advocate for the protection of vibrant, fragile coral ecosystems that inhabit cold waters at great depths.</p>
          </div>
        </div>
        
        <div class="w3-display-container mySlides">
          <img src="images/dynamite.jpg" style="width:100%;height: 620px;">
          <div class="w3-display-topright w3-container w3-padding-16 w3-black" style="font-size: 22px;text-align: center;">
            <p>We provide solutions to and advocate for bans on destructive fishing gear and overfishing.</p>
          </div>
        </div>
        
        <div class="w3-display-container mySlides">
          <img src="images/polar.jpg" style="width:100%;height: 620px;">
          <div class="w3-display-topleft w3-container w3-padding-16 w3-black" style="font-size: 20px;text-align: center;">
            <p>We work to study and address the impacts of climate change and advocate for marine protected areas that will support climate resilience in coastal communities and marine ecosystems.</p>
          </div>
        </div>
        
        <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
        
        </div>
        


        <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        </script>
</section>

<!--Why Donate-->
<section class="services-container">
    <div class="mission">
        <div>
            <h1 class="head">Why Should You Donate?</h1>
            <p>Only we humans make waste that nature can't digest. We hope for your help to explore and protect the wild ocean in ways that will restore the health and, in doing so, secure hope for humankind. Health to the ocean means health for us. Through your donation you will empower us to continue our fight for sustainability and healthier seas; to remove plastics from the sea; to plant mangroves and to building livelihoods for marginalised fisherfolk. 
                No water, no life.</p>
        </div>
    </div>
</section>

<!--Donation Form-->
<section class="form-container">
    <div class="col-1">
        <h1>What it means to donate on MARINE<span style="color: skyblue;">life</span></h1>
        <p style="font-size: 20px;text-align: justify;margin-top: 20px;">When you donate to Marine Life institute, you'll join a growing team dedicated to saving the ocean! Every single penny goes towards one of our projects that help ensure our blue planet can thrive for future generations. Make a difference, combat climate change and donate today!</p>
    </div>
    <div class="col-2">
        <h1><img src="images/nav-logo.png" style="width: 80px;height: 70px;">Amount to Donate</h1>
        <form>
            <label for="twenty">
                <input type="radio" name="amount" id="twenty">
                <span> ₱20 or $0.36 </span>
            </label>
            <label for="fifty">
                <input type="radio" name="amount" id="fifty">
                <span>₱50 or $0.90</span>
            </label>
            <label for="hundred">
                <input type="radio" name="amount" id="hundred">
                <span>₱100 or $1.80</span>
            </label>
            <br>
            <p>GIVEN NAME</p>
            <input type="text" placeholder="Enter Your Name">
            <p>EMAIL ADDRESS</p>
            <input type="text" placeholder="Enter Your Email Address">
            <button type="submit">Donate</button>
            
        </form>
    </div>
</section>



     <!--Back To Top Script-->
	<script>
		let mybutton = document.getElementById("toTop");
		
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 200 || document.documentElement.scrollTop >  200) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
	
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>