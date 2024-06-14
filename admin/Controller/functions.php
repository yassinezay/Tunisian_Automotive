<?php 
include '../config.php';
include '../Model/crudpanel.php';
class admincrudpanel{
	function RecDia($raoufw,$fk){
		if($fk==1){
			$sql="INSERT INTO `diagnostiques`(`id`, `modele`, `kilm`, `timee`, `tel`, `mail`, `addit`, `seen`) VALUES ('',:modele,:kilm,:timee,:tel,:mail,:addit,'0')";
			$db = config::getConnexion();
			try {
				$query = $db->prepare($sql);
                $query->bindValue(':modele', 'modele');
                $query->bindValue(':kilm', 'kilm');
                $query->bindValue(':timee', 'timee');
                $query->bindValue(':tel', 'tel');
                $query->bindValue(':mail', 'mail');
                $query->bindValue(':addit', 'addit');
				$query->execute([
					'modele' => $raoufw->getmodelevoi(),
					'kilm' => $raoufw->getkilom(),
					'timee' => $raoufw->getdate(),
					'tel' => $raoufw->gettel(),
					'mail' => $raoufw->getmail(),
					'addit' => $raoufw->getaddit(),
				]);
			} catch (Exception $e) {
				echo 'Error: ' . $e->getMessage();
			}
		}else{
			$sql="INSERT INTO `reclamations`(`id`, `tel`, `mail`, `addi`,`produit`, `seen`) VALUES (NULL,:tel,:mail,:produit,:addit,'0')";
			$db = config::getConnexion();
			try {
				$query = $db->prepare($sql);
                $query->bindValue(':tel', 'tel');
                $query->bindValue(':mail', 'mail');
                $query->bindValue(':produit', 'produit');
                $query->bindValue(':addit', 'addit');
				$query->execute([
					'tel' => $raoufw->gettel(),
					'mail' => $raoufw->getmail(),
                    'produit' => $raoufw->getselectrelac(),
					'addit' => $raoufw->getaddit(),
				]);
			} catch (Exception $e) {
				echo 'Error: ' . $e->getMessage();
			}
		
		}
	}	
	function RejectOrder($id,$type){
		if($type=="R"){
			$sql = "DELETE FROM `reclamations` WHERE id=:id";
		}else{
			$sql = "DELETE FROM `diagnostiques` WHERE id=:id";
		}
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
			$query->bindValue(':id', $id);
            $query->execute();
			if($type=="R"){
				return 1; 
			}
			else{
				return 2;
			}
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
	function getsingleitem($id){
		$sql = "SELECT * FROM `articles` WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
			$query->bindValue(':id', $id);
            $query->execute();
			return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
	function Viewticket($id,$type){	
		if($type=="R"){
			$sql = "SELECT * FROM `reclamations` WHERE id=:id";
		}else{
			$sql = "SELECT * FROM `diagnostiques` WHERE id=:id";
		}
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
			$query->bindValue(':id', $id);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
	function ReplyCoder($id,$type){
		if($type=="R"){
            $sql = "SELECT mail FROM `reclamations` WHERE id=:id";
            $db = config::getConnexion();		
            try {
                    $query = $db->prepare($sql);
                    $query->bindValue(':id', $id);
                    $query->execute();
                    foreach ($liste as $row) {$emailz=$row['mail'];}
            } catch (Exception $e) {
                    die('Error:' . $e->getMessage());
            }
			$sql = "UPDATE `reclamations` SET `seen`='1' WHERE id=:id";
		}else{
            $sql = "SELECT mail FROM `diagnostiques` WHERE id=:id";
            $db = config::getConnexion();		
            try {
                    $query = $db->prepare($sql);
                    $query->bindValue(':id', $id);
                    $query->execute();
                    foreach ($query as $row) {$emailz=$row['mail'];}
            } catch (Exception $e) {
                    die('Error:' . $e->getMessage());
            }
			$sql = "UPDATE `diagnostiques` SET `seen`='1' WHERE id=:id";
		}
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
			$query->bindValue(':id', $id);
            $query->execute();
            require 'sendgrid/vendor/autoload.php';
            $email = new SendGrid\Mail\Mail();
            $email->setFrom("abderraouf.mahmoudi@esprit.tn", "AutoMotive");
            $email->setSubject("Thank you For your comment 🚀🤙🏼");
            $email->addTo($emailz,"Joseph");
            $email->addContent("text/html", "Ti reclami wlle yedek hhhhhh");
            #$sendgrid = new SendGrid('');
            try {
                #$response = $sendgrid->send($email);
                //print $response->statusCode() . " ";
                //print_r($response->headers());
                //print $response->body() . " ";
                //khalio taw narje3lha xD ala rahtek ay chokran yalla gn gn

            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ." ";
            }


			if($type=="R"){
				return 1; 
			}
			else{
				return 2;
			}
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
	
	
	function Allproducts($isitsearch,$type){
        $db = config::getConnexion();		
		try {
			if($isitsearch==false){
				$sql = "SELECT * FROM articles";
				$query = $db->prepare($sql);
			}else{
				if($type=="ALL"){
					$sql = "SELECT * FROM articles";
					$query = $db->prepare($sql);
				}else{
					$sql = "SELECT * FROM articles WHERE type=:type";
					$query = $db->prepare($sql);
					$query->bindValue(':type', $type);
				}
			}
            $query->execute();
			return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
    function tableRecla()
    {
        $sql = "SELECT * FROM reclamations";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function tableDiago()
    {
        $sql = "SELECT * FROM diagnostiques";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
	function getAllitems(){
        $sql = "SELECT * FROM articles";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
	}
    function countit($table)
    {
		$sql = 'SELECT * FROM '.$table.' WHERE seen=0';
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query->rowCount();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function getitemname($id)
    {
        $sql = "SELECT * FROM articles WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            foreach ($query as $row) {
                return $row['name'];
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }




    function Oneitem($id)
    {
        $sql = "SELECT * FROM articles WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
			$query->bindValue(':id', $id);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
	function additem($raouf){
		$sql="INSERT INTO `articles`(`id`, `name`, `type`, `img`, `price`, `des`) VALUES (NULL,:name,:type,:img,:price,:des)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $raouf->getnameitem(),
                'type' => $raouf->gettypeitem(),
                'img' => $raouf->getimgpath(),
                'price' => $raouf->getpriceitem(),
                'des' => $raouf->getdescription()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
	}
    function deleteitem($id)
    {
		$sql = "DELETE FROM `articles` WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function edititem($raouf, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE articles SET 
                    name = :name, 
                    type = :type, 
                    img  = :img, 
                    price = :price, 
                    des = :des
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'name' => $raouf->getnameitem(),
                'type' => $raouf->gettypeitem(),
                'img' => $raouf->getimgpath(),
                'price' => $raouf->getpriceitem(),
                'des' => $raouf->getdescription()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



	
	
}


