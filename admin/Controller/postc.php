<?php
require '../config.php';
include '../Model/post.php';
class PostC
{
public function listpost(){
    $sql="SELECT * FROM post,admin where admin.id_admin=post.id_admin order by id_post ";
    $db= config::getConnexion();
    try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
die('Error :'. $e->getMessage());
}
}

 function deletepost($id)
    {
        $sql = "DELETE FROM post WHERE id_post = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addpost($post)
    {
        $sql = "INSERT INTO post  
        VALUES (NULL, :fn,:ln)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $post->gettxtpost(),
                'ln' => $post->getidadmin()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function updatepost($post, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE post SET 
                    txt_post = :txt_post, 
                    id_admin = :id_admin
                WHERE id_post= :id_post'
            );
            $query->execute([
                'id_post' => $id,
                'txt_post' => $post->gettxtpost(),
                'id_admin' => $post->getidadmin()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    function showpost($id)
    {
        $sql = "SELECT * from post where id_post = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
    
            $post = $query->fetch();
            return $post;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
}

?>