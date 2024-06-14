<?php
include '../Controller/users.php';
$ClientC1 =new ClientC;
$ClientC1->deleteClient($_GET['id_user']);
header('Location:admin.php');