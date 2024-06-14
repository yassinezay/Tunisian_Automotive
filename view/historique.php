<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-class.php';
$DB = new config();
$crudPanier = new panier($DB);
$id=$_SESSION['id'];
$list = $crudPanier->getAllPanierWithFacture($id);

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Main Style CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Projet web</title>
    
    

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>

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
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="repair.php" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                          
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="cars.html">Cars For sale</a>
                                <a class="dropdown-item" href="faq.html">Rent A Car</a>
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
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay1 header-text">
       
       
       
       
       
        <!--Cart-->
<section class="cart container my-5 py-5 ">
    <div class="container mt-5">
        <h2 class="font-weight-bolde" >Historique de commandes</h2>
        <hr>

    </div>
    <div class="table-responsive">
        
    
    <table class="mt-5 pt-5" id="myTable1" border="1">
        <thead>
        <tr>
           <th>Id</th> 
           <th>Date de creation</th>
           <th>Etat (1 = payée / 0 = non payée)</th>
           <th>Action</th>
           
           
           
        </tr>
        </thead>
        <tbody>

<?php

       
       foreach($list as $product):
       ?>
       <?php if( count($crudPanier->getPanierProductById( $product->id)) != 0) : ?>
<tr>
    
    <td>
    
        <div class="product-info">
            <div>
                <span><?= $product->id; ?></span>
    
            </div>
        </div>
    </td>
    <td>
    
        <div class="product-info">
            <div>
                <span><?= $product->date_creation; ?></span>
    
            </div>
        </div>
    </td>
    <td>
    <div>
                <span><?php if($product->paid==1){echo 'payée';}else{echo 'non payée';} ; ?></span>
    
            </div>
    </td>
    <td>
    
        <div class="product-info">
            <div>
            <?php if($product->paid==1) : ?>
                                        <a href="facture.php?id_facture=<?= $product->id_facture; ?>">Consulter</a>
                                                <?php else : ?>
                                                   
                                                    <a href="facture.php">Consulter</a>
                                                   
                                                    <?php endif ; ?>
            </div>
        </div>
    </td>
    <?php endif ; ?>
    
    
   

    <?php endforeach;?>
    
    
</tr>
</tbody>

    </table>
    </div>
    

    


    
</section>
        </div>
    </div>
</div>

<!-- ***** Main Banner Area End ***** -->





    









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



<script>

function checkQuanite(id){
    event.preventDefault()
quanite = document.getElementById(id).value;
if(quanite <= 0){
    var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}else{
    document.getElementById("form_quantite").submit();
}

}

</script>
<!-- Jquery JS Link -->
    

    <!-- Bootstrap JS Link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- Datepicker JS Link -->
    <script src="assets/js/bootstrap-datepicker.min.js"></script>

    <!-- Swiper Slider JS Link -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- Fancybox JS Link -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- Font Awesome JS Link -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- Wow Animation JS Link -->
    <script src="assets/js/wow.min.js"></script>

    <!-- Custom JS Link -->
    <script src="assets/js/custom.js"></script>


    

    <script>
         $(document).ready( function () {
    $('#myTable1').DataTable({
        lengthMenu: [
            [1,2,10, 25, 50, -1],
            [1,2,10, 25, 50, 'All'],
        ],
    });
} );
    </script>


            <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php
}
else
header("location:login.php");
?>
    