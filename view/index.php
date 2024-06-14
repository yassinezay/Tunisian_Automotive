<?php
include('../config.php');
$sql="update visitorc set visitor_counter=visitor_counter+1";
$db = config::getConnexion();
$stmt=$db->prepare($sql);
$stmt->execute();



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Dealer Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    
      <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
      <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap" rel="stylesheet">
      
     
      <style>
        .attribution { font-size: 11px; text-align: center; }
        .attribution a { color: hsl(228, 45%, 44%); }
      </style>
    
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <img src="assets/images/logo4.png">
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="car.php">Cars For sale</a>
                                    <a class="dropdown-item" href="indexloan.php">Rent A Car</a>
                                    <a class="dropdown-item" href="Repair.php">Repair Service</a>
                                    <a class="dropdown-item" href="reclamations.php" >Diagnostiques et reclamations</a>
                                </div>
                            </li>
                            <li><a href="forum.php">Forum</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                            <li class="nav-item">
                                <a href="cart.php" ><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                              <a href="account.php" ><i class="fa fa-user"></i></a>           
                          </li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
    </header>
    <!-- ***** Header Area End ***** -->
<!-- Rating state start -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>NEW ARRIVALS</h6>
                <h2>Best <em>Prices</em> This Season!</h2>
                <div class="main-button">
                    <a href="car.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    
      
      
    
   
    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Who are We ?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Whiz-Bang is a small, high-speed shell whose sound as it flies through the air arrives almost at the same instant as its explosion. And someone who is whiz-bang is someone that is conspicuously effective, successful or skillful, 
We have choosed this name as it represents perfectly our team which is founded in 2021, by the members
Mentionned down there and
 based in Esprit.</p>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Have a look at our <em>Forum</em></h2>
                        <br>
                        <div class="main-button">
                            <a href="forum.php">Forum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <br>
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Team</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>WHIZ-BANG</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/raouf.jpg" alt="First One" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Abderraouf Mahmoudi</h4>
                                <p><em>"un membre fondateur de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université "</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/kamel.jpg" alt="second one" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Kamel Haj Salah</h4>
                                <p><em>"un membre fondateur de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université "</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/yassinezay.jpg" alt="fourth muscle" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Yassine Zayane</h4>
                                <p><em>"un membre fondateur de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université "</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/ines.jpg" alt="training fifth" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Ines Cherif</h4>
                                <p><em>"une membre fondatrice de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université "</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/arij.jpg" alt="training fifth" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Arij Horchani</h4>
                                <p><em>"une membre fondatrice de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/khlifi.jpg" alt="training fifth" height="100" width="100">
                            </div>
                            <div class="right-content">
                                <h4>Yassin Khelifi</h4>
                                <p><em>"un membre fondateur de WHIZ-BANG , fondé à ESPRIT en 2021 qui entame pour la 2 éme année consécutive un projet au sein de cette université"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Your <em>Feedback</em></h2>
                    <img src="assets/images/line-dec.png" alt="waves">
             
            <div class="main-button text-center">
                <a id="popup"href="feedback.php">Click Here</a>
            </div>
        </div>
    </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 WHIZ-BANG
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    <script src="./assets/js/app.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>