<?php
session_start();
if(isset($_SESSION['email']) and isset($_SESSION['password']))
{
require '../config.php';
require '../Controller/panier-classV.php';
$id=$_SESSION['id'];
$DB = new config();
$panier= new panierV($DB);
$lastPanier = $DB->query("SELECT * FROM commandevoiture c WHERE c.paid=0 and c.id_user = '$id' ORDER BY ID DESC LIMIT 1");
$id_panier;
if(!empty($lastPanier)){
    $id_panier  = $lastPanier[0]->id;
}else{
    $sql = "INSERT INTO commandevoiture  (paid,id_user)
VALUES (:paid,:id_user)";

try {
   
    $db = config::getConnexion();
    $query = $db    ->prepare($sql);
    $query->execute([
        'paid'=>0,
    'id_user' => $id]);
        $lastPanier = $DB->query("SELECT * FROM commandevoiture c  WHERE c.paid=0 and c.id_user = '$id' ORDER BY ID DESC LIMIT 1");
        $id_panier  = $lastPanier[0]->id;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
}

$sql = "INSERT INTO ligne_commandevoiture  
VALUES (NULL, :quantite,:id_produit,:id_commande)";

try {
   
    $db = config::getConnexion();
    $query = $db    ->prepare($sql);
    $query->execute([
        'quantite' => 1,
        'id_produit' => $_GET['id'],
        'id_commande' => $id_panier
        
    ]);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

header('Location: ../view/cartV.php');

?>
<?php
}
else
header("location:../view/login.php");
?>