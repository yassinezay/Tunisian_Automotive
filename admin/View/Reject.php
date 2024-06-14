<?php
include '../Controller/functions.php';
$raouf = null;
$admincrudpanel = new admincrudpanel();
$id=$_GET['id'];
$type=$_GET['type'];
$RRRRRRRRR = $admincrudpanel->RejectOrder($id,$type);
if($RRRRRRRRR==1){
	echo('<script>alert("Successfully Rejected.");</script>');
	echo('<script>window.location = "liste_rec.php";</script>');
}else if($RRRRRRRRR=2){
	echo('<script>alert("Successfully Rejected.");</script>');
	echo('<script>window.location = "liste_diag.php";</script>');
}else{
	echo('<script>alert("YAAA SALIM YEHDIK RABI");</script>');
}			
?>