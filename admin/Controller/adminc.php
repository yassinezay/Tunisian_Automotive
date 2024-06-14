<?php
require '../config.php';
include '../model/Admin.php';
class AdminC
{
public function listadmin(){
    $sql="SELECT * FROM admin";
    $db= config::getConnexion();
    try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
die('Error :'. $e->getMessage());
}
}

 function deleteadmin($id)
    {
        $sql = "DELETE FROM admin WHERE id_admin = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
 function addadmin($admin)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO admin VALUES (NULL, :ln, :pw,:ad)";
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $admin->getLastName(),
                'pw' => $admin->getpw(),
                'ad' => $admin->getAddress()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
 function updateadmin($admin, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE admin SET 
                    nom_admin = :nom_admin, 
                    pw_admin = :pw_admin,
                    email_admin = :email_admin 
                WHERE id_admin= :id_admin'
            );
            $query->execute([
                'id_admin' => $id,
                'nom_admin' => $admin->getLastName(),
                'pw_admin' => $admin->getpw(),
                'email_admin' => $admin->getAddress()  

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showadmin($id)
    {
        $sql = "SELECT * from admin where id_admin = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $admin = $query->fetch();
            return $admin;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

?>