<?php
require 'connection.php';
require 'panier-class.php';
$DB = new DB();
$panier= new panier($DB);
?>