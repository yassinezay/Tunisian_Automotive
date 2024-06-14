<?php
class panierV{

private $DB;


    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        $this->DB= $DB;
        if(isset($_GET['id_article'])){
            $this->del($_GET['id_article']);
        }
        if(isset($_POST['panier']['quantity'])){
            $this->recalc();
        }

    
        if(isset($_GET['quantite'] ) && isset( $_GET['commande_id'])){
            $this->editQuantite($_GET['quantite'] ,$_GET['commande_id']);
        }
    }
    public function recalc(){
        $_SESSION['panier'] = $_POST['panier']['quantity'];
    }


public function count(){
   return array_sum($_SESSION['panier']);
}


    public function add($product_id){
        if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
        }else{
            $_SESSION['panier'][$product_id] = 1 ;
        }
        
    }
    
    public function total($panier_products,$id_u){
        $total=0;

        foreach($this->getPanierProduct($id_u) as $product){
            $total += $product->prix *0.2 ;
        }
        return $total;
    }

    public function del($product_id){
        $sql = "DELETE FROM ligne_commandevoiture WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $product_id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());

        }
    }
    public function editQuantite($quantite , $id_commande){
        $sql = "UPDATE ligne_commandevoiture  SET quantite = :qq WHERE id = :cid";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':qq', $quantite);
        $req->bindValue(':cid', $id_commande);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());

        }
    }


    public function getAllPanier()
    {
        $db = config::getConnexion();
        $DB = new config();
        $list = $DB->query('SELECT * FROM commandevoiture');
        return $list;
    }

    public function getAllPanierWithFacture($id)
    {
        
        $db = config::getConnexion();
        $DB = new config();
        $list = $DB->query("SELECT p.*, f.id as id_facture FROM `commandevoiture` p left join facturev f on f.id_panier = p.id where p.id_user = '$id' ORDER BY id DESC");
        return $list;
    }

    public function getPanierProductById($idCmmande)
    {
        $db = config::getConnexion();
        $DB = new config();
        $list = $DB->query('SELECT * FROM ligne_commandevoiture lp inner join vehicule v on lp.id_produit = v.idVehicule where lp.id_commande = '.$idCmmande);
        return $list;
    }


    public function getLastPanier($id_u)
    {
        $db = config::getConnexion();
      $DB = new config();

        $lastPanier = $DB->query("SELECT * FROM commandevoiture c WHERE c.paid=0 and c.id_user= '$id_u' ORDER BY id DESC LIMIT 1");
        $id_panier;
        if (!empty($lastPanier)) {
            $id_panier = $lastPanier[0]->id;
        } else {
            $sql = "INSERT INTO commandevoiture  (paid,id_user)
                VALUES (:paid,:id_user)";

            try {

                $query = $db->prepare($sql);
                $query->execute([
                    'paid' => 0,
                    'id_user' => $id_u
                ]);
                $lastPanier = $DB->query("SELECT * FROM commandevoiture c WHERE c.paid=0  and c.id_user= '$id_u' ORDER BY id DESC LIMIT 1");
                $id_panier = $lastPanier[0]->id;
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }
        }
        return $id_panier;
    }

    public function getLastFacture()
    {
        $db = config::getConnexion();
      $DB = new config();

        $lastFactureanier = $DB->query('SELECT * FROM facturev ORDER BY id DESC LIMIT 1');
        return $lastFactureanier[0]->id;
    }

    public function getPanierProduct($id_u)
    {
        $db = config::getConnexion();
        $DB = new config();
        $list = $DB->query('SELECT * FROM ligne_commandevoiture lp inner join vehicule v on lp.id_produit = v.idVehicule where lp.id_commande = '.$this->getLastPanier($id_u));
        return $list;
    }

    public function editPanier($id_panier)
    {
        $db = config::getConnexion();
        $DB = new config();
        $sql = "UPDATE commandevoiture set paid = 1 WHERE id = :panier";

            try {

                $query = $db->prepare($sql);
                $query->execute([
                    'panier' => $id_panier
                ]);
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }
    }


    public function createFacture($id){
        $db = config::getConnexion();
        $DB = new config();
            $sql = "INSERT INTO facturev (id_panier)
            VALUES (:id_panier)";

            try {

                $query = $db->prepare($sql);
                $query->execute([
                    'id_panier' => $this->getLastPanier($id),
                ]);

                

            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }
            $this->editPanier($this->getLastPanier($id));
            header('Location: ../View/facturevoiture.php?id_facture='.$this->getLastFacture());

    }

    public function getFacture($id_facture){
        $db = config::getConnexion();
        $DB = new config();
        $facture = $DB->query('SELECT * FROM facturev where id = '.$id_facture);
        return $facture[0];
    }

    public function getFactureProducts($id_facture)
    {
        $db = config::getConnexion();
        $DB = new config();
        $facure = $DB->query('SELECT * FROM facturev where id = '.$id_facture);
        $list = $DB->query('SELECT * FROM ligne_commandevoiture lp inner join vehicule v on lp.id_produit = v.idVehicule where lp.id_commande = '.$facure[0]->id_panier);
        return $list;
    }

    public function getTotalFacture($id_facture)
    {
        $total = 0;
        foreach ($this->getFactureProducts($id_facture) as $value) {
            $total += $value->prix  ; 
          }
         return $total;
    }
    public function getTotal($id_u)
    {
        $total = 0;
        foreach ($this->getPanierProduct($id_u) as $value) {
            $total += $value->prix  ; 
          }
         return $total;
    }

}
?>