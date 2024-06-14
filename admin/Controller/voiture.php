<?php
/*
function modifier($marque,$matricule,$prix,$dispo,$modele,$image)
{
  if(require("db.php"))
  {
    $req = $db->prepare("UPDATE voitures SET `Marque` = ?, 'Matricule&= ?, 'PrixJour'= ?, 'Dispo' = ?, 'Modele' = ?  , 'Img' = ?  WHERE 'ID'=?");

    $req->execute(array($image, $marque, $prix, $matricule,$modele, $id));

    $req->closeCursor();
  }
}

function afficherUnProduit($id)
{
	if(require("db.php"))
	{
		$req=$db->prepare("SELECT * FROM voitures WHERE ID=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}


function ajouter($marque,$matricule,$prix,$dispo,$modele,$image)
{
if(require("db.php"))
{
    $req = $db->prepare("INSERT INTO voitures (Marque, Matricule, PrixJour ,Dispo ,Modele, Img) VALUES(?,?,?,?,?,?)");
    $req->execute(array($marque,$matricule,$prix,$dispo,$Modele,$image));
    $req->closeCursor();
}
}
function afficher()
{
    if(require("../../db.php"))
{
    $req = $db->prepare("SELECT * FROM voitures ORDER BY ID DESC");
    $req->execute();
  $data=$req->fetchAll(PDO ::FETCH_OBJ);
  return $data;  
  $req->closeCursor();
}

}

function supprimer($id)
{
    if(require("db.php"))
{
    $req = $db->prepare("DELETE FROM voitures WHERE ID=?");
    $req->execute(array($id));
    $req->closeCursor();
}
}



*/

?>

<?php

require("../model/vt.php");
require("../config.php");

class voitureC
{
public function listvoiture(){
 
    
    if(require("../../db.php"))
    {
        $req = $db->query("SELECT * FROM voitures  ");
      
      return  $req;  
      $req->closeCursor();
    }
}
public function trivoiture(){
 
    
    if(require("../../db.php"))
    {
        $req = $db->query("SELECT * FROM voitures ORDER BY PrixJour  ASC");
      
      return  $req;  
      $req->closeCursor();
    }
}



 function deleteVoiture($id)
    {
        if(require("../../db.php"))
        {
            $req = $db->prepare("DELETE FROM voitures WHERE ID=?");
            $req->execute(array($id));
            $req->closeCursor();
        }
    }
 function addVoiture($voiture)
    {
        if(require("../../db.php"))
        {
            $req = $db->prepare("INSERT INTO voitures VALUES(NULL,:Marque,:Modele,:Matricule,:PrixJour,:Img)");
        
            $req->execute([
                
                'Marque' => $voiture->getMarque(), 
                'Modele' => $voiture->getModele(),
                'Matricule' => $voiture->getMatricule(),
               
                'PrixJour' => $voiture->getprix(),
             
                'Img' => $voiture->getImg(),
              
            ]);   
            $req->closeCursor();
        } 
        }
    
 function updateVoiture($voiture, $id)
    {
        if(require("../../db.php"))
  {
   
            $req = $db->prepare(
                'UPDATE voitures SET 
                    Marque = :Marque, 
                    Matricule = :Matricule, 
                   Modele = :Modele, 
                  PrixJour = :PrixJour,
                 Img = : Img 
                WHERE ID= :ID'
            );
          $req->execute([
                'ID' => $id,
                'Marque' => $voiture->getMarque(),  
                'Modele' => $voiture->getModele(),
                 'Matricule' => $voiture->getMatricule(),
              
                'PrixJour' => $voiture->getprix(),
                'Img' => $voiture->getImg()]);

            
            $req->closeCursor();
    }
}
  
    }



?>