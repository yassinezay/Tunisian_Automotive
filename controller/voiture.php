

<?php

require("../model/vt.php");
require("../config.php");
class voitureC
{
public function listvoiture(){
 



    $sql = "SELECT * FROM voitures";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }

    
 
      
    
}
public function trivoiture(){



    $sql = "SELECT * FROM voitures ORDER BY PrixJour  ASC";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }

      
    
}



 function deleteVoiture($id)
    {
        $db = config::getConnexion();
        $DB = new config();
            $req = $DB->prepare("DELETE FROM voitures WHERE ID=?");
            $req->execute(array($id));
           
        
    }
 function addVoiture($voiture)
    {
        $db = config::getConnexion();
        $DB = new config();
            $req = $DB->prepare("INSERT INTO voitures VALUES(NULL,:Marque,:Modele,:Matricule,:PrixJour,:Img)");
        
            $req->execute([
                
                'Marque' => $voiture->getMarque(), 
                'Modele' => $voiture->getModele(),
                'Matricule' => $voiture->getMatricule(),
               
                'PrixJour' => $voiture->getprix(),
             
                'Img' => $voiture->getImg(),
              
            ]);   
            
         
        }
    
 function updateVoiture($voiture, $id)
    {
        $db = config::getConnexion();
        $DB = new config();
   
            $req = $DB->prepare(
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

            
            
    
}
  
    }



?>