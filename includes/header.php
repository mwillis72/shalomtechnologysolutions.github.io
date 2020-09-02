<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shalom Technology Solutions</title>
    <link rel="stylesheet" href="./styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    
    <script src="./js/jquery-331.min.js"></script>
    <script src="./js/bootstrap-337.min.js"></script>
    <script src="./myJs.js"></script>

</head>
<body>
<div class="header">
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="welcome" style="text-decoration: aqua;"> 
                       Welcome To Shalom Technology Solutions
               </a>
               
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <i class="fa fa-envelope"></i>
                       <a href="mailto:developersam6@gmail.com?subject=Feedback To Shalom Technology Solutions" style="text-decoration:none">developersam6@gmail.com</a>
                   </li>
                   <li>
                       <i class="fa fa-whatsapp"></i>
                       <a href="https://wa.me/256778618944/?text=urlencodedtext" style="text-decoration:none">+256778618944</a>
                    </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/shalomtech-logo2.png" alt="Shalom Technology Solutions Logo" class="hidden-xs">
                   <img src="images/shalomtech-logo-mobile.png" alt="Shalom Technology Solutions Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               
               
           </div><!-- navbar-header Finish -->
           
           <div class="collapse navbar-collapse" id="navigation" name="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="">
                           <a href="index.php">Home</a>
                           
                       </li>
                     
                       <li class="dropdown">
                           <a href="" class="dropdown-toggle dropitem" data-toggle="dropdown">Services<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="mobile-app.php">Mobile App Development</a></li>
                                <li><a href="web-app.php">Web App Development</a></li>
                                <li><a href="custom-software.php">Custom Software Development</a></li>
                            </ul>
                       </li>
                       <li class="dropdown">
                       <a href="" class="dropdown-toggle dropitem" data-toggle="dropdown">Industries<span class="caret"></span></a>
                       <ul class="dropdown-menu">

                                <li><a href="finance.php">Finance</a></li>
                                <li><a href="healthcare.php">Healthcare</a></li>
                                <li><a href="lifestyle.php">Lifestyle</a></li>
                                <li><a href="education.php">Education</a></li>
                                <li><a href="real-estate.php">Real Estate</a></li>
                                <li><a href="mid-sized-businesses.php">Mid-Sized Businesses</a></li>
                                <li><a href="transportation.php">Transportation</a></li>
                                <li><a href="entertainment.php">Entertainment</a></li>
                                <li><a href="wholesale-and-retail.php">Wholesale and Retail</a></li>
                            </ul>
                       </li>
                       <li class="">
                           <a href="">Blog</a>
                       </li>
                       <li class="">
                           <a href="about-us.php">About Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="contact-us.php" class="btn navbar-btn btn-info right rounded-pill"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <span> Contact Us</span>
                   
                   <i class="fa fa-phone"></i>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->

        <!--progress-indicator start-->
        <div class="progress-container">

            <div class="progress-bar" id="myBar"></div>

        </div> <!--progress-indicator finish-->

   </div><!-- navbar navbar-default Finish -->

</div>
<script>

window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

</script>