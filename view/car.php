<?php
include '../Controller/vehiculeC.php';
$crudVehicule =  new VehiculeC();
$listeVoiture = $crudVehicule->listVehicules();
?>
<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>AutoMotive | Repair</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logoong.png">

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
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="car.php">Cars For sale</a>
                                    <a class="dropdown-item" href="indexloan.php">Rent A Car</a>
                                    <a class="dropdown-item " href="Repair.php" >Repair Service</a>
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
	
	
	<!-- ***** Main Banner Area Start ***** -->
    
    
    <!-- ***** Main Banner Area End ***** -->
        <!-- ***** Call to Action Start ***** -->
        <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Service de <em>Vente de voiture</em></h2>
                        <p>Ici, vous pouvez trouver nos voitures</p>
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
                                <label>Type de pièce:</label>
                     
                                 <select>
                                      <option value="">--All--</option>
                                      <option value="acc">Accessoires</option>
                                      <option value="pr">pièces d'echanges</option>
                                 </select>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Models:</label>
                     
                                 <select>
                                      <option value="">--All --</option>
                                      <option value="">Selon choix</option>
                                      <option value="">Standard</option>
                                 </select>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Prix:</label>
                     
                                 <select>
                                      <option value="">-- All --</option>
                                      <option value="">-100</option>
                                      <option value="">+200</option>
                                      <option value="">+300</option>
                                      <option value="">+400</option>
                                 </select>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Model:</label>
                     
                                 <select>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                      <option value="">-- All --</option>
                                 </select>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 offset-sm-4">
                      <div class="main-button text-center">
                          <a href="#">Search</a> 
                        
                         
                      </div>
                      <div class="main-button text-center">
                      <a href="cartV.php">Voir Vos voitures commandées</a>
                        
                         
                      </div> 
                      
                    </div>
                    <br>
                    <br>
                </form>
            </div>
<br>
            <div class="row">
            
<?php foreach ( $listeVoiture as $product):?>
                <div class="col-lg-4">
                
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <img src="<?= $product->img ;?>" width="370" height="198" alt="Car">
                        </div>
                        <div class="down-content">
                            <span>
                            <p><?= number_format( $product->prix,3) ;?> DT </p>
                            </span>
                            
                            <p>
                                <i class="fa fa-cog"></i> <?= $product->boite ;?> / <?= $product->carburant ;?> &nbsp;&nbsp;&nbsp;
                            </p>
                            <h3 class="h3-title"><?= $product->marque ;?> / <?= $product->model ;?> </h3>
                            
                            <a class="buy-btn1" href="../Controller/ajoutervoiture.php?id=<?= $product->idVehicule; ?>"> Commander</a>
                        </div>
                        
                    </div>
                    
                </div>
                <?php endforeach;?>  
            </div>
            

            
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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