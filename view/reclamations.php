<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
include '../Controller/functions.php';
$raouf = null;
$admincrudpanel = new admincrudpanel();
if(isset($_POST["SendD"])){
        $raoufw = new raoufw(null,$_POST['modelevoi'],$_POST['kilom'],$_POST['timee'],$_POST['tel'],$_POST['mail'],$_POST['addit'],0);
        $admincrudpanel->RecDia($raoufw,1);
		echo('<script>alert("done");</script>');
}

if(isset($_POST["xx"])){
		die('dddd');
}
if(isset($_POST["SendR"])){
        $raoufw = new raoufu(null,$_POST['tel'],$_POST['mail'],$_POST['addit'],$_POST['selectrelac'],0);
        $admincrudpanel->RecDia($raoufw,2);
		echo('<script>alert("done");</script>');
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>AUTOMOTIVE | Reclamations</title>
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
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Tunisian <em>Automotive</em></h2>
                        <p>Best In The Town!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Diagnostiques et reclamations</h2>
            <br>
        </div>
        <div class="mx-auto container">
            <div id="login-form" id="flogin">
			
<script>
function alerti_broD(){
swal({
  title: "Good job!",
  text: "Thank you We will call you back ❤️ ",
  icon: "success",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      document.getElementById("houmaD").click();
  } else {
    swal("Canceled");
  }
});
}

function ValidateEmail(input) {
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (input.match(validRegex)) {
    return true;
  } else {
    return false;
  }
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    function validateinputD(){
        if(document.getElementById("modelevoi").value.length==0){document.getElementById("errorz").innerHTML = "Modele !";return false;}
        if(document.getElementById("kilom").value.length==0){document.getElementById("errorz").innerHTML = "kilom !";return false;}
        if(document.getElementById("timee").value.length==0){document.getElementById("errorz").innerHTML = "timee !";return false;}
        if(document.getElementById("tel").value.length==0){document.getElementById("errorz").innerHTML = "tel !";return false;}
        if(document.getElementById("mail").value.length==0){document.getElementById("errorz").innerHTML = "mail !";return false;}
        if(!ValidateEmail(document.getElementById("mail").value)){document.getElementById("errorz").innerHTML = "mail !";return false;}
        alerti_broD();
    }
function alerti_broR(){
swal({
  title: "Good job!",
  text: "Thank you We will call you back ❤️ ",
  icon: "success",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      document.getElementById("houmarr").click();
  } else {
    swal("Canceled");
  }
});
}
function validateinputR(){
        if(document.getElementById("tel").value.length==0){document.getElementById("errorz").innerHTML = "tel !";return false;}
        if(document.getElementById("mail").value.length==0){document.getElementById("errorz").innerHTML = "mail !";return false;}
        if(!ValidateEmail(document.getElementById("mail").value)){document.getElementById("errorz").innerHTML = "mail !";return false;}
        if(document.getElementById("selectrelac").value=='0'){document.getElementById("errorz").innerHTML = "Please Select !";return false;}
        alerti_broR();
}
function selectii(){
	if(document.getElementById('selme').value=='Diagnostiques'){
		html='<div class="form-group"><label>Modele</label><input type="text" class="form-control" id="modelevoi" name="modelevoi" placeholder="modele" /></div><div class="form-group"><label>xxx</label><input type="text" class="form-control" id="kilom" name="kilom" placeholder="kilom" /></div><div class="form-group"><label>Date</label><input class="form-control" type="datetime-local" id="timee" name="timee"></div><div class="form-group"><label>tel</label><input type="text" class="form-control" id="tel" name="tel" placeholder="tel" onkeypress="return isNumber(event)" /></div><div class="form-group"><label>Email</label><input type="email" class="form-control" id="mail" name="mail" placeholder="mail" /></div><div class="form-group"><label>Additional details:</label><textarea class="form-control" name="addit" id="addit"></textarea></div><div class="form-group"><input type="button" onclick="validateinputD();"  class="btn" id="login-btn" value="Send" /><button type="submit" id="houmaD" name="SendD" style="display:none;"></button></div></form>'
		document.getElementById("rrr").innerHTML = html;
        document.getElementById("itemspourreclam").style.display = "none";
        document.getElementById("rrr2").innerHTML = "";
	}else if(document.getElementById('selme').value=='Reclamations'){
		html='<div class="form-group">    <label>tel</label><input type="text" class="form-control" id="tel" onkeypress="return isNumber(event)" name="tel" placeholder="tel"/></div><div class="form-group"> <label>Email</label><input type="email" class="form-control" id="mail" name="mail" placeholder="mail"/></div>'
		document.getElementById("rrr").innerHTML = html;
        document.getElementById("itemspourreclam").style.display = "block";
        html='<div class="form-group">  <label>Additional details:</label><textarea class="form-control" name="addit" id="addit"></textarea></div><div class="form-group">  <input type="button" onclick="validateinputR();"  class="btn" id="login-btn" value="Send" /><button type="submit" id="houmarr" name="SendR" style="display:none;">dff</button></div></form>'
        document.getElementById("rrr2").innerHTML = html;
	}else{
		document.getElementById("rrr").innerHTML = '';
        document.getElementById("itemspourreclam").style.display = "none";
        document.getElementById("rrr2").innerHTML = "";
	}
}
</script>




                <p id="errorz" style="color:red;"></p>
				

				
				
                <div class="form-group">
                    <label>Type</label>
					<select class="form-control" id="selme" style="width: 60%;margin: 5px auto;" onchange="selectii();">
						<option value="0">--All--</option>
						<option value="Diagnostiques">Diagnostiques</option>
						<option value="Reclamations">Reclamations</option>
                    </select>
                </div>
				<form id="login-form" method="post" action="" id="flogin">
				<div id="rrr"></div>
                <div class="form-group" style="display:none;" id="itemspourreclam">
                    <label>Item</label>
                    <select class="form-control" id="selectrelac" name="selectrelac" style="width: 60%;margin: 5px auto;">
                        <option value="0">--All--</option>

<?php                                 
$admincrudpanel = new admincrudpanel();
$liste = $admincrudpanel->getAllitems();        
foreach ($liste as $row) {
    echo("<option value='".$row['id']."'>".$row['name']."</option>");
}
?> 
                    </select>
                </div>
                <div id="rrr2"></div>
            </div>
        </div>
    </section>
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
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