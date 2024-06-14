
<?php

require("../controller/voiture.php");
$voitureC = new voitureC();
$list = $voitureC->listvoiture();

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
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="active">Our Services</a>
                          
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
                            <a href="cart.html" ><i class="fa fa-shopping-cart"></i></a>
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
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Cars</em></h2>
                        <p>Meilleur prix,Meilleure qualité</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="main-button text-center">
                                    <table>
                            <td>  <a href="loan2.php"> chercher voiture</a></td>
                            </div>
                            
                            <br>
                            <div class="main-button text-center">
                            
            <td>   <a href="loan3.php"> trier selon Prix croissant</a> </td>
            </table>
            </div>  
                         <br>
                    <br>
            </div>
                        </div>
                                  
                      
                    
                       
                       
            <div class="row">
                <?php foreach($list as $voitures){ ?> 
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <tr>
                            <td>
                        <div class="image-thumb">
                             
                            <img src="<?=$voitures['Img']?>"  alt="">
                        </div>
                        </td>
                        
                        <div class="down-content">
                        
                            <span>
                                <del><sup>D/Jour</sup><?=$voitures['PrixJour']?></del> &nbsp; <sup>D/Jour</sup><?=$voitures['PrixJour']?>
                            </span>

                            <h4><?=$voitures['Marque']?></h4>
                           
                            <p>
                                <i class="fa fa-dashboard"></i> <?=$voitures['Modele'] ?> &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i>  &nbsp;&nbsp;&nbsp;
                                
        
                            </p>

                            <ul class="social-icons">
                                <li>                   <a href="loan1.php ?ID=<?php echo $voitures['ID']; ?>" >LOUER MAINTENANT</a></li>
                            </ul>
                        </div>
                        </td>
                        </tr>
                    </div>
                </div>
               

                            
                 
                
             
        <?php
        }
        ?>
          <br>
                
           
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>