<?php


    
        
            try {
                $db = new pdo(
                    "mysql:host=localhost;dbname=forum;charset=utf8","root","");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING );
                    
                    
            } catch (Exception $e) {
               $e->getMessage();
            }
        

    

?>