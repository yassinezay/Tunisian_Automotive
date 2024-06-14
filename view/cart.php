<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-class.php';
$id=$_SESSION['id'];
$DB = new config();
$panier= new panier($DB);
$lastPanier = $DB->query("SELECT * FROM `commande` c  WHERE c.paid=0 AND c.id_user = '$id' ORDER BY ID DESC LIMIT 1");
    
$products = $DB->query('SELECT cmd.id,cmd.quantite,cmd.id_produit,cmd.id_commande,p.name,p.price FROM `ligne_commande` cmd left join articles p on p.id = cmd.id_produit where cmd.id_commande = '.$lastPanier[0]->id);


?>



<!DOCTYPE html>
<html lang="en">

  <head>

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
    <style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: red;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
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
                            <li><a href="index.php">Home</a></li>
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
        <h2 class="font-weight-bolde" >Your Cart</h2>
        <hr>

    </div>
    <table class="mt-5 pt-5">
        <tr>
           <th>Product</th> 
           <th>Quantity</th>
           
           
        </tr>
        <tr>
        
        </tr>


<?php

       
       foreach($products as $product):
       ?>
<tr>
    
    <td>
    
        <div class="product-info">
           <span><img src="assets/images/product/<?= $product->id_produit;?>.jpg" alt=""></span> 
            <div>
                <span><?= $product->name; ?></span>
                
                <br>
                <span><?= $product->price; ?> TND/Piece</span>
                <br>
                <br>
                <span><a class="remove-btn" href="cart.php?id_article=<?= $product->id; ?>"> Remove</a></span>
                <br>
                <br>
                
                
            </div>
        </div>
    </td>

    <td>
        
        <form id="form_quantite" onsubmit="event.preventDefault()" >
        <input type="number" max="1000" min="0" name="quantite" value="<?= $product->quantite;?>" size="2" id="quantite_<?= $product->id;?>">
        <input type="text" name="commande_id" value="<?= $product->id;?>" size="2" hidden  >
        <button id="btn_submit" onclick="checkQuanite('quantite_<?= $product->id;?>')"> Edit </button>
    </form>
        
        
    </td>
    <?php endforeach;?>
    
    
</tr>

    </table>
    

    <div class="cart-total">
    <table>

<tr>
    <td>Total</td>
    <td><?= number_format($panier->total($products,$id)); ?> TND</td>
</tr>
    </table>
    </div>



<div class="checkout-container">
    
    <input type="button" class="btn checkout-btn " value="Checkout" onclick="clicked2()" >
          <script>
            function clicked2() {
              window.location.assign("checkout.php");
            }
          </script>
</div>
<br>
<div class="checkout-container">
    
    <input type="button" class="btn checkout-btn " value="historique de commande" onclick="clicked()" >
          <script>
            function clicked() {
              window.location.assign("historique.php");
            }
          </script>
</div>


    
</section>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->





    


<div id="snackbar">Quantite < 0 !</div>






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
/*
document.getElementById("btn_submit").addEventListener("click", function (event) {
alert('asba')

event.preventDefault()

 //  form.submit();
});
*/
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
    
    