<?php
class Commande
{
    private ?int $idCommande = null;
    private ?string $date_creation = null;
    private ?int $paid = null;
    private ?int $id_user = null;
    

    public function __construct($id = null, $d, $p,$i)
    {
        $this->idCommande = $id;
        $this->date_creation = $d;
        $this->paid = $p;
        $this->id_user = $i;
        
    }

    /**
     * Get the value of idClient
     */
    public function getidcommande()
    {
        return $this->idCommande;
    }

    /**
     * Get the value of lastName
     */
    public function getpaid()
    {
        return $this->paid;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setpaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }



    public function getiduser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setiduser($id_user)
    {
        $this->paid = $id_user;

        return $this;
    }

   

    /**
     * Get the value of dob
     */
    public function getdate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setdate_creation($date_creation)
    {
        $this->date_creation = $date_creation
        
        ;

        return $this;
    }
}
