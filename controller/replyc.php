<?php
require '../config.php';
include '../model/Reply.php';
class ReplyC
{
    function addreply($reply)
    {
        $sql = "INSERT INTO reply  
        VALUES (NULL, :fn, :tx, :ln, :ad, :um, :us)";
        $db = config::getConnexion();
        try {
            print_r($reply->getdate()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $reply->getIdreply(),
                'tx' => $reply->getreply(),
                'ln' => $reply->getdate()->format('Y/m/d'),
                'ad' => $reply->getheure(),
                'um' => $reply->getidmessage(),
                'us' => $reply->getiduser()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getreply();
        }
    }
    
}

?>