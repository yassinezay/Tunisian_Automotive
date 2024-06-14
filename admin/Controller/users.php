<?php
require '../config.php';
include '../Model/Client.php';
class ClientC
{
public function listclient(){
    $sql="SELECT * FROM utilisateur";
    $db= config::getConnexion();
    try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
die('Error :'. $e->getMessage());
}
}

 function deleteClient($id)
    {
        $sql = "DELETE FROM utilisateur WHERE id_user = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
 function addClient($client)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO utilisateur VALUES (NULL, :fn,:ln, :ad,:pw)";
        try {
            $query = $db->prepare($sql);
            $query->execute([
                
                'fn' => $client->getFirstName(),
                'ln' => $client->getLastName(),
                'ad' => $client->getAddress(),
                'pw' => $client->getpw()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
 function updateClient($client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE utilisateur SET 
                    nom_user = :nom_user, 
                    prenom_user = :prenom_user, 
                    email_user = :email_user, 
                    pw_user = :pw_user
                WHERE id_user= :id_user'
            );
            $query->execute([
                'id_user' => $id,
                'nom_user' => $client->getLastName(),
                'prenom_user' => $client->getFirstName(),
                'email_user' => $client->getAddress(),  
                'pw_user' => $client->getpw()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showClient($id)
    {
        $sql = "SELECT * from utilisateur where id_user = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

?>