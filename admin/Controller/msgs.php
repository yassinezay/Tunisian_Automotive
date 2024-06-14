<?php
require '../config.php';
include '../Model/message.php';
class MessageC{
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
function deletemessage($id)
{
    $sql = "DELETE FROM message WHERE id_message = :id";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);

    try {
        $req->execute();
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}
function addmessage($message)
    {
        $sql = "INSERT INTO message  
        VALUES (NULL, :fn,:ln, :ad,:us)";
        $db = config::getConnexion();
        try {
            print_r($message->getdate()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $message->getmessage(),
                'ln' => $message->getdate()->format('Y/m/d'),
                'ad' => $message->getheure(),
                'us' => $message->getiduser()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
function updatemessage($message, $id)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE message SET 
                texte_message = :texte_message, 
                date_message = :date_message, 
                heure_message = :heure_message, 
                id_user = :id_user
            WHERE id_message= :id_message'
        );
        $query->execute([
            'id_message' => $id,
            'texte_message' => $message->getmessage(),
            'date_message' => $message->getdate()->format('Y/m/d'),
            'heure_message' => $message->getheure(),
            'id_user' => $message->getiduser()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

function showmessage($id)
{
    $sql = "SELECT * from message where id_message = $id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();

        $message = $query->fetch();
        return $message;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
}

?>