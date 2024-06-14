<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
  include("../config.php");
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="car.php">Cars For sale</a>
                                    <a class="dropdown-item" href="indexloan.php">Rent A Car</a>
                                    <a class="dropdown-item" href="repair.php">Repair Service</a>
                                    <a class="dropdown-item" href="reclamations.php" >Diagnostiques et reclamations</a>
                                </div>
                            </li>
                            <li><a href="forum.php">Forum</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                            <li class="nav-item">
                                <a href="cart.php" ><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                              <a href="account.php" class="active"><i class="fa fa-user"></i></a>           
                          </li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    </section> 
    <!--account-->
    <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h3 class="font-weight-bold">Account info</h3>
            <hr class="mx-auto">
            <div class="account-info">
                <p>Name : <span><?= $_SESSION['name']; ?></span></p>
                <p>Email : <span><?= $_SESSION['email']; ?></span></p>
                <p><a href="cart.php" id="orders-btn">Your order</a></p>
                <p><a href="logout.php" id="logout-btn">Logout</a></p>

            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
         <form id="account-form">
            <h3>Change Password</h3>
            <hr class="mx-auto">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required />
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="account-password-confirm" name="confirmpassword" placeholder="Password" required />
            </div>
            <div class="form-group">
                <input type="submit" value="Change Password" class="btn" id="change-pass-btn"/>
            </div>
            
         </form>   
        </div>
        </div>
    </section>
    <!-- ***** Footer Start ***** -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 WHIZ-BANG</a>
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
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
<?php
}
else
header("location:login.php");
?>