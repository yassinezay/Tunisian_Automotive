<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-classV.php';
$id=$_SESSION['id'];
$DB = new config();
$crudPanier = new panierV($DB);
$list ;
$total ; 
$date ;
$paye = true ;
$id_facture = "" ;
if (!isset($_GET['id_facture'])) {
	
    $list = $crudPanier->getPanierProduct($id);
	if(count($list) == 0 ){
		header('Location: index.php');
	}
	$total = $crudPanier->getTotal($id);
	$date = date("D M d, Y G:i");
$paye = false ;
}

if (isset($_GET['id_facture'])) {
	$paye = true;
	$facture  = $crudPanier->getFacture($_GET['id_facture']);
    $list = $crudPanier->getFactureProducts($_GET['id_facture']);
	$total = $crudPanier->getTotalFacture($_GET['id_facture']);
	$date = $facture->date_creation;
	$id_facture = $facture->id;
}

if (isset($_GET['paid'])) {
	$crudPanier->createFacture($id);
 }

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS Link -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<a href="javascript:genScreenshot()"><button style="background:aqua; cursor:pointer" id="telecharger">Télécharger</button> </a>
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="body">
			
			<div class="main_table">
				<div class="table_header">
					<div class="row">
					
						<div class="col col_no">Id commande </div>
						<div class="col col_des">Id produit</div>
						<div class="col col_price">Marque</div>
						<div class="col col_qty">model</div>
						<div class="col col_total">Produit</div>
						
					</div>
				</div>
				<?php

       
       foreach($list as $achat):
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
							<?= $achat->marque; ?>
							</td>
							
						</div>
						<div class="col col_qty">
							<td name="quantite" id="quantite">
							<?= $achat->model; ?>
							</td>
							
						</div>
						<div class="col col_total">
							<p><img src="<?= $achat->img ;?>" width="90" height="90" alt="Car"></p>
						</div>
						
						
					</div>
			
					

					
					
					
					
					
				</div>
				<?php endforeach;?>
			</div>
			

		

			<div class="paymethod_grandtotal_wrap">
				<div class="paymethod_sec">
					<p class="bold">Payment Method</p>
					<p>Visa, master Card and We accept Cheque</p>
				</div>
				<div class="grandtotal_sec">
			     
			       	<p class="bold">
			            <span>Grand Total</span>
			            <span><?= number_format($total *0.20,3);?> TND</span>
						
			        </p>
					
				</div>
				
			</div>
			
		</div>
		<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Date :</b> <?= $date; ?> </p>
							
							<?php if(!$paye) : ?>
							<a href="facturevoiture.php?paid=ok" class="btn btn-primary" style="margin-left: 118%;"> Payer </a>
							<?php endif ; ?>
						</div>
						<div class="">
							
						</div>
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

<script>
function genScreenshot() {
	$('#capture').css('margin-left','5%');
	$('#telecharger').css('display','none');
	$('#historique').css('display','none');
	
    html2canvas(document.body, {
      onrendered: function(canvas) {
	
      $('#box1').html("");
			$('#box1').append(canvas);
      
      if (navigator.userAgent.indexOf("MSIE ") > 0 || 
					navigator.userAgent.match(/Trident.*rv\:11\./)) 
			{
      	var blob = canvas.msToBlob();

        window.navigator.msSaveBlob(blob,'Test file.png');
        
      }
      else   {
        $('#capture').css('margin-left','26%');
        $('#test').attr('href', canvas.toDataURL("image/png"));
        doc = new jsPDF({
                     unit: 'px',
                     format: 'a2'
                 });
                doc.addImage(canvas.toDataURL("image/png"), 'JPEG', 0, 0);
                doc.save('ExportFile.pdf');
   
				location.reload();
         }
		
      }
    });
}
</script>


</body>
</html>
<?php
}
else
header("location:login.php");
?>