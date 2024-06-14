<?php
session_start();
?>
<?php
include '../controller/users.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["name"]) &&
    isset($_POST["lname"]) &&
    isset($_POST["email"])&&
    isset($_POST["mp1"])
)
{
    if (
        !empty($_POST['name']) &&
        !empty($_POST["lname"]) &&
        !empty($_POST["email"])&&
        !empty($_POST["mp1"])
    ) {
        $client = new Client(
            null,
            $_POST['name'],
            $_POST['lname'],
            $_POST['email'],
            $_POST['mp1']
            
        );
        $clientC->addClient($client);
        header('Location:login.php');
    } else
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>  
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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    </section>
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Register</h2>
            <br>
        </div>
        <div class="mx-auto container">
        <form id="register-form" action="" method="post" id="inscription" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name" onkeyup="nameValidation()" placeholder="name"/>
                <span id="first_name_error" class="text-danger"></span>
                <p style="color: red" id="nomEr"></p>
            </div>
            <div class="form-group" id="seconddiv" hidden="hidden">
                <label>Last Name</label>
                <input type="text" class="form-control" id="lastname" onkeyup="lastnameValidation()" name="lname" placeholder="Last name"  />
                <span id="last_name_error" class="text-danger"></span>
                <p style="color: red" id="nameEr"></p>
            </div>
            <div class="form-group"id="thirddiv" hidden="hidden">
                <label>Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="email" name="email" onkeyup="verifyEmail()" placeholder="email" />
                <span id="email_error" class="text-danger"></span>
                <p style="color: red" id="psEmail"></p>
            </div>
            <div class="form-group" id="fourthdiv" hidden="hidden">
                <label>Password</label>
                <input type="password" class="form-control" id="password" onkeyup="verifyPassword()" name="mp1" placeholder="password"  />
                <span id="password_error" class="text-danger"></span>
                <p style="color: red" id="psEr"></p>

            </div>
            <div class="form-group" id="fifthdiv" hidden="hidden">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword"  onkeyup="matchingpasswords()" name="mp2" placeholder="Confirm password"  />
                <p style="color: red" id="pssEr"></p>
            </div>
      

            <div class="form-group" id="sixthdiv" hidden="hidden">
                <input type="submit" name="submit" class="submit-btn" id="register" value="Register" />
            </div>
            
            <p style="color: red" id="fromEr"></p>
            <div class="form-group">
                <a href="login.php" id="login-url" class="btn">Do you have an account? Login</a>
            </div>
            
            <div align="center" class="g-recaptcha" data-sitekey="6Le0EzsjAAAAAGJcmih4ERjg2OTiYbtqp3zjJpoR"></div>
       <span id="captcha_error" class="text-danger"></span>
       </div>
</form>

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

    <script src="./test.js">
      
    </script>
  </body>
</html>
<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"process_data.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $('#register').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#register').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
     $('#first_name_error').text('');
     $('#last_name_error').text('');
     $('#email_error').text('');
     $('#password_error').text('');
     $('#captcha_error').text('');
     grecaptcha.reset();
     alert('Form Successfully validated');
    }
    else
    {
     $('#first_name_error').text(data.first_name_error);
     $('#last_name_error').text(data.last_name_error);
     $('#email_error').text(data.email_error);
     $('#password_error').text(data.password_error);
     $('#captcha_error').text(data.captcha_error);
    }
   }
  })
 });

});
</script>
