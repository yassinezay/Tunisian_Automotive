<?php
    require_once "../config.php";
 $Login = 0 ;
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

                 if(empty($_SESSION["user"])){
                     $Login=0 ;
                 }
                    else{
                     $Login=1 ;

                 }
                
if ( !isset($_SESSION['panierjar']) && !isset($_SESSION['panieraccess']) && !isset($_SESSION['panieraliment'])){
    $tot = 0;
    $indic = 0;
}
else{
    $indic=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>AutoMotive | rcars</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logoong.png">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Repair.php">Repair Service</a>
                                    <a class="dropdown-item" href="indexloan.php">Rent A Car</a>
                                    <a class="dropdown-item active" href="car.php" >Cars For sale</a>
                                    <a class="dropdown-item" href="reclamations.php" >Demandes et reclamations</a>
                                </div>
                            </li>
                            <li><a href="forum.php">Forum</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                            <li class="nav-item">
                                <a href="cart.php" ><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                              <a href="account.html" ><i class="fa fa-user"></i></a>           
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
    

</head>


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

</html>