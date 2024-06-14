<?php
include '../Controller/msgs.php';
$MessageC1 =new MessageC;
$MessageC1->deletemessage($_GET['id_message']);
header('Location:listmessage.php');