<?php
include '../config.php';
include '../model/panier.php';

class PanierC
{
    public function affichercommande()
    {
        $sql = "SELECT * FROM ligne_commande";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deletepanier($id)
    {
        $sql = "DELETE FROM ligne_commande WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function addpanier($panier)
    {
        $sql = "INSERT INTO ligne_commande(id,quantite,id_produit,id_commande) VALUES (NULL, :d,:p,:c)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'd' => $panier->getquantite(),
                'p' => $panier->getid_produit(),
                'c' => $panier->getid_commande()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }




    public function updatepanier($panier, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE ligne_commande SET 
                 quantite = :d,
                    id_produit = :id_produit,
                    id_commande = :id_commande
                   
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'd' => $panier->getquantite(),
                'id_produit' => $panier->getid_produit(),
                'id_commande' => $panier->getid_commande()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function showpanier($id)
    {
        $sql = "SELECT * from ligne_commande where id = $id";
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
