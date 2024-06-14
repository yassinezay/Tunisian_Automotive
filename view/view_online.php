<?php
session_start();
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-class.php';
$id=$_SESSION['id'];
$DB = new config();
$panier= new panier($DB);
$lastPanier = $DB->query("SELECT * FROM commande WHERE paid=0 AND id_user = '$id' ORDER BY ID DESC LIMIT 1");
$achats = $DB->query('SELECT cmd.id,cmd.quantite,cmd.id_produit,cmd.id_commande,p.name,p.price FROM `ligne_commande` cmd left join articles p on p.id = cmd.id_produit where cmd.id_commande = '.$lastPanier[0]->id);
$gt=0;
$i=1;

$html ='<!DOCTYPE html>
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
    <body>

 
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
        <h2 class="font-weight-bolde" >AUTOMOTIVE</h2>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="font-weight-bolde" align="center" >Votre Facture</h2>
       
        
    </div>
    <table class="mt-5 pt-5" border="2" align="center">
    <tr>
           <th>Id commande</th> 
           <th>Id produit   </th>
           <th>Nom produit  </th>
           <th>Quantite produit </th>
           <th>Prix produit </th>
           
          
           
           
           
        </tr>
        ';
        foreach($achats as $product):
            $html .='
            <tr>
    
            <td>
            
                <div class="product-info">
                    <div>
                        <span>'.$product->id_commande.'</span>
            
                    </div>
                </div>
            </td>
            <td>
            
                <div class="product-info">
                    <div>
                    <span>' .$product->id_produit.'</span>
                        
            
                    </div>
                </div>
            </td>
            <td>
            
                <div class="product-info">
                    <div>
                    <span>' .$product->name.'</span>
                        
            
                    </div>
                </div>
            </td>
            <td>
            
                <div class="product-info">
                    <div>
                    <span>'     .$product->quantite.'</span>
                       
            
                    </div>
                </div>
            </td>
            <td>
            
                <div class="product-info">
                    <div>
                    <span>' .$product->price.'</span>
                        
            
                    </div>
                </div>
            </td>
            </tr>
            
            ';
        endforeach;
        
        $html .= ' 
        <tr>
            <td>
            <br>
            <br>
            <div class="cart-total" >
            <span>Total : '. number_format($panier->total($achats,$id)).' TND</span>
            </div>
            </td>
            </tr>
        </table>
        <br>
        <!-- ***** Footer Start ***** -->
<footer>
    <div class="container" align="center">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Copyright © 2020 WHIZ-BANG
                    
                </p>
            </div>
        </div>
    </div>
</footer>
        </body>
</html>';
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream('facture.pdf',['Attachment'=>false]);    

?>
<?php
}
else
header("location:login.php");
?>


