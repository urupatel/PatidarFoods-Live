<?php
// ----------------------------------------- 
//  The Web Help .com
// ----------------------------------------- 
// remember to replace your@email.com with your own email address lower in this code.

// load the variables form address bar
$name = $_REQUEST["name"];

$message = $_REQUEST["message"];

$from = $_REQUEST["from"];

$replyemail="patidarfoods21@gmail.com"; //change to your email address
$valid_ref1="https://patidarfoods.ca/"; //chamge to your domain name
$valid_ref2="https://patidarfoods.ca/"; //chamge to your domain name


// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name); 
$number = stripslashes($message); 
$from = stripslashes($from); 



function is_forbidden($str,$check_all_patterns = true)
{
 $patterns[0] = '/content-type:/';
 $patterns[1] = '/mime-version/';
 $patterns[2] = '/multipart/';
 $patterns[3] = '/Content-Transfer-Encoding/';
 $patterns[4] = '/to:/';
 $patterns[5] = '/cc:/';
 $patterns[6] = '/bcc:/';
 $forbidden = 0;
 for ($i=0; $i<count($patterns); $i++)
  {
   $forbidden = preg_match($patterns[$i], strtolower($str));
   if ($forbidden) break;
  }
 //check for line breaks if checking all patterns
 if ($check_all_patterns AND !$forbidden) $forbidden = preg_match("/(%0a|%0d|\\n+|\\r+)/i", $str);
 
 if ($forbidden)
 {
  echo "<font color=red><center><h3>STOP! Message not sent.</font></h3><br><b>
        The text you entered is forbidden, it includes one or more of the following:
        <br><textarea rows=9 cols=25>";
  foreach ($patterns as $key => $value) echo trim($value,"/")."\n";
 
  exit();
 }
}





$replymessage = 
 
"Hi $name



Thank you for your inquiry.

Your message will be answer shortly.

If you do not get any response within 2 working days kindly email us at patidarfoods21@gmail.com

Below is a copy of the message you submitted:

Name: $name
Message: $message
--------------------------------------------------
www.patidarfoods.ca";








// check to see if verificaton code was correct

	// if verification code was correct send the message and show this page
	$message = "Name: ".$name."\n Message: " .$message;
	$message = "From: ".$from."\n".$message;
	
	mail("$replyemail",
     "Inquiry from Patidar Foods: $subject",
     "$message",
	  "From: $from\nReply-To: $from");
mail("$from",
     "Thank you for your inquiry to Patidar Foods $subject",
     "$replymessage",
     "From: $replyemail\nReply-To: $replyemail");
	 echo $success_sent_msg;
	// delete the cookie so it cannot sent again by refreshing this page



$success_sent_msg='
	
	
	
	
	
	';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patidar Food </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>

  <!-- =======================================================
  * Template Name: Delicious - v4.9.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 

  <!-- ======= Header ======= -->
 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background:#3e0803">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html"><img src="assets/img/logo.png"/></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="menu.html">Menu</a></li>
          <li><a class="nav-link scrollto" href="catering.html">Catering</a></li>
          <!--<li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li> -->
      
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

<br>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      

        <div class="d-flex justify-content-between align-items-center">
          <img src="assets/img/thankyou.jpg" width="100%"/>
          
        </div>

     
    </section><!-- End Breadcrumbs Section -->

   
   
   
   
   
   
   
   
    
   
   
   
   
   
     
    
   
  
             
         
           


  </main><!-- End #main -->

  <!-- ======= F
  
  ooter ======= -->
  <footer id="footer">
    <div class="container">
    <div class="row animate__animated animate__fadeInUp">
    <div class="col-4" align="left">
      <img src="assets/img/logo.png" width="30%" ><br>
       <div class="social-links" align="left">
        <a href="#" class="facebook"><i class="bx bx-map"></i></a>118-501 Krug St. Kitchener, ON, N2B 1L3, Canada<br>
        <a href="#" class="facebook"><i class="bx bx-phone"></i></a>+1 519-954-4773<br>
           <a href="#" class="facebook"><i class="bx bx-envelope"></i></a>patidarfoods21@gmail.com
     
        <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        
        <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
      
      </div>
      
       <div class="col-4">
      <h5 align="center" class="footer"> SUPPORT </h5><br>
     <ul style="list-style:none; line-height:2">
      <li><a class="nav-link scrollto" href="index.html">Home</a>   </li>
          <li><a class="nav-link scrollto" href="about.html">About us</a>   	</li>
        <li><a class="nav-link scrollto" href="menu.html">Menu</a></li>
		<li><a class="nav-link scrollto" href="catering.html">Catering</a></li>
     </ul>
      
      </div>
      
      
      
       <div class="col-4">
      <h5 align="center" class="footer"> DELIVERED BY </h5>
      <br>
    <img src="assets/img/delieverd.png" width="70%"><br><br><br>
     <div class="social-links">
      <a href="https://www.facebook.com/PatidaarFoods" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/patidarfoods" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
      
      
      
      </div>
      <br>
      <div class="copyright">
        &copy; Copyright <strong><span>Patidar Foods</span></strong>. All Rights Reserved
      </div>
   
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


 

</body>

</html>

