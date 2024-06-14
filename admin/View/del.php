<?php
include '../Controller/functions.php';
$admincrudpanel = new admincrudpanel();
$admincrudpanel->deleteitem($_GET['id']);
echo('<script>alert("Successfully Deleted.");window.location = "liste_pieces.php";</script>');
?>
