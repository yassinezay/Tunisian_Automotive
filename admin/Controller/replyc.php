<?php
require '../config.php';
include '../Model/reply.php';
class ReplyC{

public function listmessage(){
        $sql="SELECT * FROM message";
        $db= config::getConnexion();
        try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Error :'. $e->getMessage());
    }
    }    
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
public function listreply(){
    $sql="SELECT * FROM reply";
    $db= config::getConnexion();
    try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
die('Error :'. $e->getMessage());
}
}
function deletereply($id)
{
    $sql = "DELETE FROM reply WHERE id_reply = :id";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);

    try {
        $req->execute();
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}
function addreply($reply)
    {
        $sql = "INSERT INTO reply  
        VALUES (NULL, :fn,:ln, :ad, :us,:um)";
        $db = config::getConnexion();
        try {
            print_r($reply->getdate()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $reply->getreply(),
                'ln' => $reply->getdate()->format('Y/m/d'),
                'ad' => $reply->getheure(),
                'us' => $reply->getiduser(),
                'um' => $reply->getidmessage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
function updatereply($reply, $id)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE reply SET 
                texte_reply = :texte_reply, 
                date_reply = :date_reply, 
                heure_reply = :heure_reply, 
                id_user = :id_user,
                id_message = :id_message
            WHERE id_reply= :id_reply'
        );
        $query->execute([
            'id_reply' => $id,
            'texte_reply' => $reply->getreply(),
            'date_reply' => $reply->getdate()->format('Y/m/d'),
            'heure_reply' => $reply->getheure(),
            'id_user' => $reply->getiduser(),
            'id_message' => $reply->getidmessage()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

function showreply($id)
{
    $sql = "SELECT * from reply where id_reply = $id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();

        $reply = $query->fetch();
        return $reply;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
}

?>