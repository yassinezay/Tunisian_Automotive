<?php
include '../Controller/functions.php';
$raouf = null;
$admincrudpanel = new admincrudpanel();
$searched=0;
if(isset($_POST['myCheck'])){
	$searched=1;
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
                                    <a class="dropdown-item" href="car.php">Cars For sale</a>
                                    <a class="dropdown-item" href="indexloan.php">Rent A Car</a>
                                    <a class="dropdown-item active" href="Repair.php" >Repair Service</a>
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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Service de <em>reparations</em></h2>
                        <p>Ici, vous pouvez trouver nos pieces</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Starts ***** -->
    
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="" method="post" id="contact">
                    <div class="row" style="justify-content: space-between;">
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
                                <label>Modele :</label>
                                 <select id="type" name="type">
                                      <option value="0" selected>select</option>
                                      <option value="ALL">--All --</option>
                                      <option value="Selon choix">Selon choix</option>
                                      <option value="Standard">Standard</option>
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
                

<script>
function isitselected(){
	if(document.getElementById('type').value=='0'){return false;}
	//================================

	//================================
	return true;
}
function verif(){
	if(isitselected()){
		document.getElementById("myCheck").click();
	}
}
</script>



                    <div class="col-sm-4 offset-sm-4">
                      <div class="main-button text-center">
						 <input name="search" type="button" value="Search" onclick="verif();" style="background-color: rgb(174, 245, 67);color: #fff;">
						 <button id="myCheck" name="myCheck" type="submit" style="display:none;">Search</button>
                      </div>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
		
<br>
            <div class="row">
				
				
<?php 

	$admincrudpanel = new admincrudpanel();
	if($searched==0){
		$liste = $admincrudpanel->Allproducts(false,"ALL");
	}else{
		$liste = $admincrudpanel->Allproducts(true,$_POST['type']);
	}
            foreach ($liste as $row) {
?>		
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?php echo($row['img'])?>" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <?php echo($row['price'])?> TND</sup>
                            </span>

                            <h4><?php echo($row['name'])?></h4>

                            <p>
                                <i class="fa fa-cog"></i> <?php echo($row['type'])?> &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
							<?php echo('<li><a href="single-prod.php?id='.$row['id'].'">+ Voir le produit</a></li>')?>
              <a class="buy-btn1" href="../Controller/ajouterpanier.php?id=<?= $row['id']; ?>"> Ajouter au panier</a>
                            </ul>
                        </div>
                    </div>
                </div>
<?php 			
}
?>
            </div>

<!--bouton-------------------------------------------------------------->
            <button
                    type="button"
                    class="btn btn-danger btn-floating btn-lg"
                    id="btn-back-to-top"
                    >
                    <i class="fa fa-arrow-up"></i>
            </button>

<script>
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!--------FIN bouton-------------------------->

            <br>
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
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
                        Copyright © 2020 WHIZ-BANG
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