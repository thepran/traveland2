 <?php
$nme=$_POST['name'];
$usr=$_POST['usr'];
$pws=$_POST['pwd'];
$email=$_POST['email'];
$contact=$_POST['co'];
$uni=0;

$con=mysqli_connect('localhost','root','','travel');
if (isset($_POST['signup']) ) {
  if($nme==""){$msg1="Please enter your name";}
  if($usr==""){$msg2="Please enter a username";}
  if($email==""){$msg3="Please enter email";}
  if($pws==""){$msg2="Please enter a password";}
  if($contact==""){$msg2="Please enter contact no";}

  
      $sel=mysqli_query($con,"select username from user_login where username='$usr'");
        $count=mysqli_num_rows($sel);
        if($count!=0){$msg2="username unavailable"; $uni=1;}
        $sel=mysqli_query($con,"select email from user_login where email='$email'");
        $count=mysqli_num_rows($sel);
        if($count!=0){$msg3="Email already registered"; $uni=1;}
        $sel=mysqli_query($con,"select contact from user_login where contact='$contact'");
        $count=mysqli_num_rows($sel);  
        if($count!=0){$msg5="Contact already registered"; $uni=1;}
        if($uni==0){
            
        
   $sq=mysqli_query($con,"insert into user_login (name,username,password,email,contact)values('$nme','$usr','$pws','$email','$contact')");
   if($sq){?>
     <script type="text/javascript">
       alert("You have successfully registered!!");
     </script> <?php
   }
   else{?>
     <script type="text/javascript">alert("Try Again!!!");</script><?php
   }
  }


 }

?>

    <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Traveland - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <!-- <script type="text/javascript" src="main.js"></script>  --> 
    
  </head>
  <body style="background-image: url('images/bg_2.jpg'); opacity: 1; background-repeat: no-repeat; position: relative; ">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span>Traveland</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="destination.html" class="nav-link">Destination</a></li>
            <li class="nav-item"><a href="hotel-resto.html" class="nav-link">Hotels &amp; Restaurant</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item "><a href="contact.html" class="nav-link">Contact</a></li>
             <li class="nav-item active"><a href="haha.html" class="nav-link">LogIn/SignUp</a></li>
            <li class="nav-item cta active"><a href="#" class="nav-link">Book Now</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   
   
      
    <section class="ftco-section contact-section">
      <div class="container" align="center" style="background-color: rgba(214, 214, 194, 0.5);" >
        <div class="row block-9">         
          <div class="col-md-6 order-md-last d-flex">
            <div class="login-info-box">
              <div class="form-group">
                <h2 style="color: #fff;">Have an account?</h2>
              </div>
              <div class="form-group">
               <a href="login.php" style="color: inherit;"><label id="label-register" for="log-reg-show">Login</label></a>
              </div>
            </div>
              
          
          </div>



          <div class="col-md-6 order-md-last d-flex">
       
            <div class="white-panel" style="width: 100%;" >
       


          <div class="register-show">
            <form name="sigform" id="sigform" method="POST" class="contact-form bg-light p-5">
              <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="validate-input form-control">
                <span style="color: red;"><?php echo $msg1;?></span>
              </div>
              <div class="form-group">
                <input type="text" name="usr" placeholder="Username" class="validate-input form-control">
                <span  style="color: red"><?php echo $msg2;?></span>
              </div>
             
              <div class="form-group">
                <input type="text" placeholder="Email" name="email" class="validate-input form-control">
                <span  style="color: red"><?php echo $msg3;?></span>
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" name="pwd" class="validate-input form-control">
                <span  style="color: red"><?php echo $msg4;?></span>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Contact No" name="co" class="validate-input form-control">
                <span  style="color: red"><?php echo $msg5;?></span>
              </div>
              <div class="form-group">
                <input type="submit" value="Register" name="signup" id="signup" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <section class="ftco-subscribe" style="background-image: url(ima,,ges/bg_1.jpg);">
      <div class="overlay">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-wrap text-center heading-section ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-10">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

     <footer class="ftco-footer ftco-footer-2 ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Traveland</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Experience</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Adventure</a></li>
                <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                <li><a href="#" class="py-2 d-block">Beach</a></li>
                <li><a href="#" class="py-2 d-block">Nature</a></li>
                <li><a href="#" class="py-2 d-block">Camping</a></li>
                <li><a href="#" class="py-2 d-block">Party</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 
      <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
          
    </section>



  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="js/validate.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/hide_show.js"></script>
  
    
  </body>
</html>