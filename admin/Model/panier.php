<?php
class Panier
{
    private ?int $id = null;
    private ?int $quantite = null;
    private ?int $id_produit = null;
    private ?int $id_commande = null;
    

    public function __construct($id = null, $d, $p,$c)
    {
        $this->id = $id;
        $this->quantite = $d;
        $this->id_produit = $p;
        $this->id_commande= $c;
        
    }

    /**
     * Get the value of idClient
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Get the value of lastName
     */
    public function getquantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setquantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

   

    /**
     * Get the value of dob
     */
    public function getid_produit()
    {
        return $this->id_produit;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setid_produit($id_produit)
    {
        $this->id_produit = $id_produit;
        
        

        return $this;
    }
    public function setid_commande($id_commande)
    {
        $this->id_commande = $id_commande;
        
        

        return $this;
    }
    public function getid_commande()
    {
        return $this->id_commande;
    }
}
