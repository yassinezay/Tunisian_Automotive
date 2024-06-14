<?php

function showVoiture($id)
    {
        if(require("../db.php"))
        {
        
       
       
            $req = $db->prepare("SELECT * FROM voitures WHERE ID = ?");
          
           
            $req->execute(array($id));
            $data=$req->fetchAll(PDO ::FETCH_OBJ);
            return $data; 
            $req->closeCursor();
        } 
        }
        ?>

<?php



$list = showvoiture($_GET['ID']);

?> 

<?php
require("../controller/reservation.php");
$error = "";
session_start();
$reserv = null;

// create an instance of the controller
if (
    isset($_POST['code']) && $_POST['code']== $_SESSION['code']&& isset($_POST['Submit'])){
$reservC = new reservationC();
if (
    isset($_POST["date"])
 
    
   
)
{
    if (
       
        !empty($_POST["date"]) 
        
      
      
    ) {
        $reserv= new reserv(
            null,
            
            $_POST['date'], 
           
            $_GET['ID']
         
         
            
        );
        $reservC->addreserv($reserv);
    
    }} else{    header('Location:afficherReserv.php');}
        $error = "Missing information";
}




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
    
                                  
                      
                    
                        
                        <table border="3" align="center" width="50%">
                
                <tr>
                    <th>Marque</th>
                    <th>Modele  </th>
                  
                    
                  
                    <th>Matricule</th>
                    <th>PrixJour</th>
                    <th></th>
                   
                </tr>
                        
                        <?php
                     
                   
                            ?>
                                <tr>
                                
                                    <td><?= $list[0]->Marque?></td>
                                    <td><?= $list[0]->Modele ?></td>
                                    <td><?= $list[0]->Matricule ?></td>
                                    
                                    <td><?= $list[0]->PrixJour ?> D</td>
                                    <td>
                                    <img src="<?= $list[0]->Img ?>" style="width: 50%">
                                       </td>
                                   
                                  </tr>  
                                   <?php
             
                ?>
                         </table>
               

                            
                

        
       
       
  
    <section>

<ul class="social-icons">
                        <li>    <h4 class="down-content">Ajouter Réservation :</h4>                </li>
                    </ul>

<hr>
<form action="" method="POST">
<table border="3" align="center">
      
   
        <td>
            <label for="date">date:
            </label>
        </td>
        <td><input type="date" name="date" id="date" ></td>
    </tr>
    <tr>
        <td>
            <label for="code">Entrer le code suivant:
            </label>
            <img src ="captcha.php" alt ="CAPTCHA" /> 
            </td> 
        <td><input type="text" name="code" id="code" ></td>
    </tr>
     <tr>
    <td align="center">
                <form method="POST" action=>
                <input type="submit" value="Submit"name="Submit" class="btn" >
                    
                </form>
            </td>
        <td>
            <input type="reset" value="Reset" class="btn">
        </td>
        </tr>
</table>
</form>
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