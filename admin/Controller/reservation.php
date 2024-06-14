
<?php
/*
function ajouterReserv($date,$idvt)
{
if(require("db.php"))
{
    $req = $db->prepare("INSERT INTO reservation (datereserv) VALUES(?)");
    $req->execute(array( $date));
    $req->closeCursor();
    
}
}


function modifierReserv($date,$id)
{
  if(require("db.php"))
  {
    $req = $db->prepare("UPDATE reservation SET `datereserv` = ? WHERE 'idreserv'= ?");

    $req->execute(array($date,$id));

    $req->closeCursor();
  }
}

function afficherReserv()
{
    if(require("db.php"))
{
    $req = $db->prepare("SELECT * FROM reservation ORDER BY idreserv DESC");
    $req->execute();
  $data=$req->fetchAll(PDO ::FETCH_OBJ);
  return $data;  
  $req->closeCursor();
}

}

function supprimerReserv($id)
{
    if(require("db.php"))
{
    $req = $db->prepare("DELETE FROM reservation WHERE idreserv=?");
    $req->execute(array($id));
    $req->closeCursor();
}

}
*/
?>

<?php

require("../model/reserv.php");
class reservationC
{
public function listreserv(){
 
    
    if(require("../../db.php"))
    {
        $req = $db->query("SELECT * FROM reservation");
      
      return  $req;  
      $req->closeCursor();
    }
}





 function deletereserv($id)
    {
        if(require("../../db.php"))
        {
            $req = $db->prepare("DELETE FROM reservation WHERE idreserv= ?");
            $req->execute(array($id));
            $req->closeCursor();
        }
    }
 function addreserv($reserv)
    {
        if(require("../../db.php"))
        {
            $req = $db->prepare("INSERT INTO reservation VALUES(NULL,:date,:idvt)");
        
            $req->execute([
                
                'date' => $reserv->getdate(), 
                'idvt' => $reserv->getidvt(),
                
              
            ]);   
            $req->closeCursor();
        } 
        }
    
 function updatereserv($reserv, $id)
    {
        if(require("../../db.php"))
  {
   
            $req = $db->prepare(
                'UPDATE reservation SET 
              
                   date = :date, 
                   idvt = :idvt
                   
                
                
                WHERE idreserv= :idreserv'
            );
          $req->execute([
                'idreserv' => $id,
                'date' => $reserv->getdate(), 
                'idvt' => $reserv->getidvt()
              
            ]);
            $req->closeCursor();
    }
}
 


}
?>