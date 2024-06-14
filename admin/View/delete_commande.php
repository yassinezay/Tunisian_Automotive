<?php
include '../Controller/commandeC.php';
$commandeC = new CommandeC();
$commandeC->deletecommande($_GET["id"]);
header('Location:liste_commandes.php');
?>