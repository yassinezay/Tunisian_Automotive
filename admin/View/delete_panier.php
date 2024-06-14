<?php
include '../Controller/panierC.php';
$panierC = new PanierC();
$panierC->deletepanier($_GET["id"]);
header('Location:panier_admin.php');
?>