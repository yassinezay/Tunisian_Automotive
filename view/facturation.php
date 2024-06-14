<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-class.php';
$id=$_SESSION['id'];
$DB = new config();
$panier= new panier($DB);

$lastPanier = $DB->query("SELECT * FROM commande  WHERE paid=0 AND id_user = '$id' ORDER BY ID DESC LIMIT 1");
$achats = $DB->query('SELECT cmd.id,cmd.quantite,cmd.id_produit,cmd.id_commande,p.name,p.price FROM `ligne_commande` cmd left join articles p on p.id = cmd.id_produit where cmd.id_commande = '.$lastPanier[0]->id);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Facturation</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles_fact.css">
</head>
<body>

<div class="wrapper">
	<div class="invoice_wrapper">
		<div class="header">
			<div class="logo_invoice_wrap">
				<div class="logo_sec">
					<img src="assets/images/logo4.png" alt="code logo">
					<div class="title_wrap" align='center'>
						<p class="title bold">AutoMotive</p>
						<p class="sub_title">Facture</p>
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="body">
			
			<div class="main_table">
				<div class="table_header">
					<div class="row">
						<div class="col col_no">Id </div>
						<div class="col col_des">Id produit</div>
						<div class="col col_price">Nom produit</div>
						<div class="col col_qty">Quantite</div>
						<div class="col col_total">Produit</div>
						
					</div>
				</div>
				<?php

       
       foreach($achats as $achat):
       ?>
				<div class="table_body">
					<div class="row">
						<div class="col col_no">
							<td name="id_commande" id="id_commande">
							<?= $achat->id_commande; ?>
							</td>
							
						</div>
						<div class="col col_des">

						<td name="id_produit" id="id_produit">
						<?= $achat->id_produit; ?>
							</td>
							
						</div>
						<div class="col col_price">
							<td name="name" id ="name">
							<?= $achat->name; ?>
							</td>
							
						</div>
						<div class="col col_qty">
							<td name="quantite" id="quantite">
							<?= $achat->quantite; ?>
							</td>
							
						</div>
						<div class="col col_total">
							<p><img src="assets/images/product/<?= $achat->id_produit;?>.jpg" alt="" height="53"></p>
						</div>
						
						
					</div>
			
					

					
					
					
					
					
				</div>
				<?php endforeach;?>
			</div>
			

		<div class="grandtotal_sec">
						<input type="submit" value="Voir facture PDF" name="generate_text" id="btnsubmit1" onclick="clicked2()" class="grandtotal_sec">
						<script>
            function clicked2() {
              window.location.assign("view_online.php");
			  
            }
          </script>
					</div>

			<div class="paymethod_grandtotal_wrap">
				<div class="paymethod_sec">
					<p class="bold">Payment Method</p>
					<p>Visa, master Card and We accept Cheque</p>
				</div>
				<div class="grandtotal_sec">
			     
			       	<p class="bold">
			            <span>Grand Total</span>
			            <span><?= number_format($panier->total($achats,$id));?> TND</span>
						
			        </p>
					
				</div>
				
			</div>
			
		</div>
		<div class="footer">
			<p>Thank you and Best Wishes</p>
			<div class="terms">
		        <p class="tc bold">Terms & Coditions</p>
		        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt error aliquid quis eius!</p>
				
		    </div>
			
		</div>
	</div>
</div>
<script>
	function generateqr(){
		var id_commande = document.getElementById('id_commande');
		console.log('id_commande ' + id_commande);
	}
	
</script>


</body>
</html>
<?php
}
else
header("location:login.php");
?>