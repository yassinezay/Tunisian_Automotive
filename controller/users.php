<?php
require '../config.php';
include '../model/Client.php';
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

  


 function resetpassword($emaxil){
    $db= config::getConnexion();
    $res=$db->query("SELECT * FROM utilisateur WHERE email_user='$emaxil'");
    $nbr=$res->rowCount();
    if($nbr==0)
       return "INVALID EMAIL";
    else
    {
        $hash=md5(rand(pow(10, 3-1), pow(10, 3)-1));
        $res=$db->query("SELECT * FROM resetpassword WHERE hash='$hash'");
        $nbr=$res->rowCount();
        if($nbr==0){
            $res=$db->query("INSERT INTO `resetpassword`(`id`, `email`, `hash`, `done`) VALUES (NULL,'$emaxil','$hash','0')");
            require 'sendgrid/vendor/autoload.php';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("amir.othman@esprit.tn", "TUNISIAN AUTOMOTIVE");
            $email->setSubject("RESET PASSWORD");
            $email->addTo($emaxil,"Joseph");
            $lien_Arij="http://localhost/project6/view/";

            $linkrezz=$lien_Arij."/change.php?email=".$emaxil."&token=".$hash;
            $email->addContent("text/html", "Dear ".$emaxil." Please <a href='".$linkrezz."'>click here</a>");
            $sendgrid = new \SendGrid('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');
            $response = $sendgrid->send($email);
            return "<font style='color:green'>Done .Please check your email</font>";
        }
    } 
 }


 function changepassword($emaxil,$token,$password){
    $db= config::getConnexion();
    $res=$db->query("SELECT * FROM resetpassword WHERE hash='$token' AND done='0'");
    $nbr=$res->rowCount();
    if($nbr==0)
       return "TOKEN NOT EXIST OR PASSWORD ALREADY CHANGED";
    else
    {
        $res=$db->query("UPDATE resetpassword SET done='1' WHERE hash='$token'");
        $res=$db->query("UPDATE utilisateur SET pw_user='$password' WHERE email_user='$emaxil'");
        return "<font style='color:green'>Done .Thank you <3 </font>";
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