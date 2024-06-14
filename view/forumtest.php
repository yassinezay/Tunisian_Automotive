<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
  include("../config.php");
  $db= config::getConnexion();

  if(isset($_POST['envoyer']))
  {
    $id=$_SESSION['id'];
    $msg=$_POST['message'];
    $date=date('Y-m-d');
    $heure=date('H:i');
    $req1=$db->query("insert into message values (NULL,'$msg','$date','$heure','$id')"); 
    header("Refresh:0");
  }
  if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
$sql='SELECT count(*) AS id_post FROM post';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$count = (int) $result['id_post'];
  $perpage=6;
  $pages= ceil($count / $perpage);

?>
<!doctype html>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="cars.html">Cars For sale</a>
                                    <a class="dropdown-item" href="faq.html">Rent A Car</a>
                                    <a class="dropdown-item" href="terms.html">Repair Service</a>
                                </div>
                            </li>
                            <li><a href="forum.php"class="active">Forum</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                            <li class="nav-item">
                                <a href="#" ><i class="fa fa-shopping-cart"></i></a>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Welcome to our <em>Forum</em></h2>
                        <p>You can ask any question here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                      <article>
                        <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                        <br>
                        <br>
                        <h2>How was your experience with Tunisian Automotive ?</h2>
                        <hr>
                        <h6>Tunisian Automotive vous permet de découvrir
les prix des voitures  Neuves de toutes les marques  automobiles en Tunisie !</h6>

                        

                        <section id="sect1">
<?php
  /* changer le format de la date en français*/
function changedate($dt)
{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}

$res=$db->query("select * from utilisateur,message where utilisateur.id_user=message.id_user order by id_message DESC LIMIT 10"); 
$res->execute();

while($data=$res->fetch(PDO::FETCH_ASSOC))
{
  echo '<div id="div1">
  <img src="images/'.$data['id_user'].'.jpg" class="photo" width="30px" height="30px">';
  echo $data['nom_user'];
  echo '<br>'.$data['prenom_user'].'</div>';
   echo '<div id="div2">'.$data['texte_message'];
  echo '<br> Posté le : '.changedate($data['date_message']);
  echo ' à '.$data['heure_message'];
  echo '<br> <a href="repondre.php"> <img src="./assets/images/reply.png" > </a>';
  $x=$data['id_message'];
  $n=$data['nom_user'];
  $rep=$db->query("select * from utilisateur,reply where reply.id_message='$x' and utilisateur.id_user=reply.id_user order by id_reply DESC LIMIT 10"); 
$rep->execute();
  while($data=$rep->fetch(PDO::FETCH_ASSOC))
{
  echo "<br> replayed to $n ";
  echo '<div id="div1">
  <img src="images/'.$data['id_user'].'.jpg" class="photo" width="30px" height="30px">';
  echo $data['nom_user'];
  echo '<br>'.$data['prenom_user'].'</div>';
   echo '<div id="div2">'.$data['texte_reply'];
  echo '<br> Posté le : '.changedate($data['date_reply']);
  echo ' à '.$data['heure_reply'].'</div>';

}
echo '</div>';
}

?>

<form action="" method="post" name="emessage">
<textarea name="message"  placeholder="Votre message" id="zmessage" onkeyup="messagesValidation()"></textarea>
<p style="color: red" id="textEr"></p>
<input type="submit" name="envoyer" value="Envoyer" id="submitbtn" class="btn2" disabled onclick="messagesValidation()">
</form>
<p style="color: red" id="textEr"></p>


</section>

                      </article>

                      <br>
                      <br>

                      <article>
                        <img src="assets/images/about-image-1-940x460.jpg" alt="">
                        <br>
                        <br>
                        <h2>Topics to discuss :</h2>
                        <hr>  
                        <div class="row">
                        <?php
                        $offset = $perpage * ($currentPage - 1);
$post=$db->query("SELECT * from admin,post where admin.id_admin=post.id_admin order by id_post DESC LIMIT $perpage OFFSET $offset");
foreach ($post as $p) {
  $isFullList = true;

  //This can be split into two separate pages.
  if(isset($_GET['id_post']) && ctype_digit($_GET['id_post'])){
    //details
    $isFullList = false;
    $pid = intval($_GET['id_post']);
    $strSQL = "SELECT * FROM post WHERE id_post=?";
    $prepared = $db->prepare($strSQL);
    $prepared->execute(array($id_post));
    // product_id, product_name, category_name, product_price, product_unit
  }else{
    //full list
    $strSQL = "SELECT * FROM post";
    $prepared = $db->prepare($strSQL);
    $prepared->execute(array());
  }
?>
                
                <div class="col-lg-4">
                    <div class="trainer-item">
                            <h4><?= $p['txt_post']; ?></h4>
                            <p>
                              <h7>posted by moderator <em> <?= $p['nom_admin']; ?></em> </h7>
                            </p>
                            <ul class="social-icons">
                                <li><a href="posts.php?id_post=<?=$p['id_post']; ?>">+ details posts</a></li>
                            </ul>
                        
                    </div>
                </div>
                <?php
              }
                 ?>
</div>
<nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                <?php if($currentPage > 1) : ?>
                  <a class="page-link" href="forumtest.php?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <?php endif ?>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <?php if($currentPage < $pages) : ?>
                  <a class="page-link" href="forumtest.php?page=<?= $currentPage + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                  <?php endif ?>

                </li>
              </ul>
            </nav>
                      </article>

                      <br>
                
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

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
    <script src="./test.js"></script>

  </body>
</html>
<?php
}
else
header("location:login.php");
?>