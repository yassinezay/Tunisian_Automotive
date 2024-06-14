<?php
include '../Controller/reservation.php';
$reservC1 =new reservationC;
$reservC1->deletereserv($_GET['idreserv']);
header('Location:afficherReserv.php');