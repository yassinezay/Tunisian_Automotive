<?php
include '../config.php';
include '../model/commande.php';

class CommandeC
{
    public function listcommande()
    {
        $sql = "SELECT * FROM commande";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deletecommande($id)
    {
        $sql = "DELETE FROM commande WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function addcommande($commande)
    {
        $sql = "INSERT INTO commande(id,date_creation,paid,id_user) VALUES (NULL, :d,:p,:i)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'd' => $commande->getdate_creation(),
                'p' => $commande->getpaid(),
                'i' => $commande->getiduser()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }




    public function updatecommande($commande, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commande SET 
                 date_creation = :d,
                    paid = :paid1,
                    id_user = :i
                   
                WHERE id= :id1'
            );
            $query->execute([
                'id1' => $id,
                'd' => $commande->getdate_creation(),
                'paid1' => $commande->getpaid(),
                'i' => $commande->getiduser()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function showcommande($id)
    {
        $sql = "SELECT * from commande where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $commande = $query->fetch();
            return $commande;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
