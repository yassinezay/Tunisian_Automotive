<?php
include '../Controller/VehiculeC.php';
$VehiculeC = new VehiculeC();
$VehiculeC->deleteVehicule($_GET["id"]);
header('Location:liste_Vehicule.php');
?>