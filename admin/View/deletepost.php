<?php
include '../Controller/postc.php';
$postC1 =new PostC;
$postC1->deletepost($_GET['id_post']);
header('Location:listpost.php');