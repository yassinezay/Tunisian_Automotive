<?php
include '../Controller/functions.php';
$raouf = null;
$admincrudpanel = new admincrudpanel();
if(!isset($_GET['id'])){echo('<script>window.location = "Repair.php";</script>');}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
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
                            <h2>Service de <em>Reparation</em></h2>
                            <p>Ici, vous pouvez trouver les pièces et les accessoires que vous avez besoin</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Call to Action End ***** -->




<?php 
	$pageid = $_GET['id'];
	$admincrudpanel = new admincrudpanel();
		$liste = $admincrudpanel->getsingleitem($pageid);
            foreach ($liste as $row) {
				
				
?>
        <section class="container single-product my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 col-12">
                    <img class="img-fluid w-100 pb-1" src="<?php echo($row["img"]);?>" id="mainIMG"/>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-1">
                    <h6><?php echo($row["name"]);?></h6>
                    <h3 class="py-4">Accessoires</h3>
                    <h2><?php echo($row["price"]);?> TND</h2>
                   
                    <a class="buy-btn1" href="../Controller/ajouterpanier.php?id=<?= $row['id']; ?>"> Ajouter au panier</a>
                    
                    <h4 class="mt-5 mb-5">details du produit</h4>
                    <span><?php echo($row["des"]);?></span>



                        <!--QR CODE-->

                        <div id="qrcode"></div>
                                    <script type="text/javascript">
                                        new QRCode(document.getElementById("qrcode"), "<?php echo($row["name"]);?>");
                                    </script>
                            <div id="qrcode-2"></div>
                            <script type="text/javascript">
                            var qrcode = new QRCode(document.getElementById("qrcode-2"), {
                                text,
                                width: 50,
                                height: 50,
                                colorDark : "#5868bf",
                                colorLight : "#ffffff",
                                correctLevel : QRCode.CorrectLevel.H
                            });
                            </script>




                </div>
                
                
                
                

            </div>
        </section>
<?php
			}
?>


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