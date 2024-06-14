<?php
session_start();
$code=strtoupper(substr(md5(uniqid(rand())),0,6));
$_SESSION['code']=$code;
$largeur=65;
$longeur=25;
$image=imagecreate($largeur,$longeur);
$noir=imagecolorallocate($image,0,0,0);
$blanc=imagecolorallocate($image,255,255,255);
$font=13;

imagestring($image,$font,5,5,$code,$blanc);
imagejpeg($image,null,75);


?>