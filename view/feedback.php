
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

  <!-- Rating state start -->
    <div class="container hide" >
      <div class="card-wrapper">
        <div class="star">
          <img src="./assets/images/star.png" alt="star" >
        </div>
        <h2>How did we do?</h2>
        <p>Please let us know how we did with your support request. All feedback is appreciated to help us improve our offering!</p>
        <form action="" method="post" enctype="multipart/form-data">  
        <div class="star-rating">
          <table>
            <tr>
            <td> <input type="radio" class="btn btn-choice" name="valeur" checked value="1"></td> 
            <td> <input type="radio" class="btn btn-choice" name="valeur" value="2" ></td>             
            <td> <input type="radio" class="btn btn-choice" name="valeur" value="3" ></td> 
            <td> <input type="radio" class="btn btn-choice" name="valeur" value="4" ></td> 
            <td> <input type="radio" class="btn btn-choice" name="valeur" value="5" ></td>
            
          </tr>
            <tr>
              <td> Awful </td>
              <td> Bad </td>
              <td> Good </td>
              <td> Superb </td>
              <td> Perfect </td>
          </tr>
          
          </table>
        </div>
        <button class="btn-submit" id="submit" name="sub">Submit</button>
        </form>
        </div>
    </div>
        <?php
        include("../config.php");
        $db= config::getConnexion();    
        if(isset($_POST['sub']))
        {
          $value=$_POST['valeur'];  
            $req1=$db->query("insert into rate values (NULL,'$value')"); 
            header('Location:feedbackend.php');

          }
        
        ?>
      
  <!-- Rating state end -->

  <!-- Thank you state start -->


  <script src="./assets/js/app.js"></script>
</body>
</html>