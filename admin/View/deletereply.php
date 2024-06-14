<?php
include '../Controller/replyc.php';
$ReplyC1 =new ReplyC;
$ReplyC1->deletereply($_GET['id_reply']);
header('Location:listreply.php');