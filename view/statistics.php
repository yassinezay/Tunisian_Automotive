<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="./assets/css/feedback.css">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap" rel="stylesheet">
  
 
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
<?php
        include("../config.php");
        $db= config::getConnexion();    
        if(isset($_POST['sub']))
        {
          $value=$_POST['valeur'];  
            $req1=$db->query("insert into rate values (NULL,'$value')"); 
        }
        ?>
<div class="container hide-thank">
      <div class="card-wrapper">
        <div class="close-btn">
          <span></span>
          <span></span>
        </div>
        <h3>Thank you!</h3>
        <p class="text-thankyou">We appreciate you taking the time to give a rating. If you ever need more support, dont hesitate to get in touch!</p>
        <a href="index.php" class="btn" id="retourner">retourner a la page acceuil</button>

      </div>
    </div>

    <script src="./assets/js/app.js"></script>
</body>
</html>