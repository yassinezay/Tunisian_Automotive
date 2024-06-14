<?php
include '../config.php';
include '../Model/Vehicule.php';

class VehiculeC
{
    public function listVehicules()
    {
        $sql = "SELECT * FROM Vehicule";
        $db = config::getConnexion();
       
        try {
            $liste = $db->query($sql);
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

    function addVehicule($Vehicule)
    {
        $sql = "INSERT INTO vehicule(idVehicule,marque,model,prix,boite) VALUES (NULL, :d,:p,:i,:b)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'd' => $Vehicule->getmarque(),
                'p' => $Vehicule->getmodel(),
                'i' => $Vehicule->getprix(),
                'b' => $Vehicule->getboite()
                
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
                    prix = :prix, 
                    boite = :boite
                WHERE idVehicule= :idVehicule'
            );
            $query->execute([
                'idVehicule' => $id,
                'marque' => $Vehicule->getmarque(),
                'model' => $Vehicule->getmodel(),
                'prix' => $Vehicule->getprix(),
                'boite' => $Vehicule->getboite()
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
?>