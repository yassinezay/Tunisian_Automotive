<?php
include '../Controller/voiture.php';
$voitureC1 =new voitureC;
$voitureC1->deleteVoiture($_GET['ID']);
header('Location:liste_voiture.php');