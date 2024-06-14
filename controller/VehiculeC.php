<?php
include '../config.php';
include '../model/Vehicule.php';

class VehiculeC
{
    public function listVehicules()
    {
        $sql = "SELECT * FROM Vehicule";
        $db = config::getConnexion();
        $DB = new config();
        try {
            $liste = $DB->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteVehicule($id)
    {
        $sql = "DELETE FROM Vehicule WHERE idVehicule = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }



    function Allproducts($isitsearch,$type){
        $db = config::getConnexion();		
		try {
			if($isitsearch==false){
				$sql = "SELECT * FROM vehicule";
				$query = $db->prepare($sql);
			}else{
				if($type=="ALL"){
					$sql = "SELECT * FROM vehicule";
					$query = $db->prepare($sql);
				}else{
					$sql = "SELECT * FROM vehicule WHERE boite=:boite";
					$query = $db->prepare($sql);
					$query->bindValue(':boite', $type);
				}
			}
            $query->execute();
			return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}



    function addVehicule($Vehicule)
    {
        $sql = "INSERT INTO Vehicule  
        VALUES (NULL, :m,:mo, :ma,:dof)";
        $db = config::getConnexion();
        try {
            print_r($Vehicule->getdof()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'm' => $Vehicule->getmarque(),
                'mo' => $Vehicule->getmodel(),
                'ma' => $Vehicule->getmatricule(),
                'dof' => $Vehicule->getdof()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateVehicule($Vehicule, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Vehicule SET 
                    marque = :marque, 
                    model = :model, 
                    matricule = :matricule, 
                    dof = :dof
                WHERE idVehicule= :idVehicule'
            );
            $query->execute([
                'idVehicule' => $id,
                'marque' => $Vehicule->getmarque(),
                'model' => $Vehicule->getmodel(),
                'matricule' => $Vehicule->getmatricule(),
                'dof' => $Vehicule->getdof()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showVehicule($id)
    {
        $sql = "SELECT * from Vehicule where idVehicule = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Vehicule = $query->fetch();
            return $Vehicule;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
