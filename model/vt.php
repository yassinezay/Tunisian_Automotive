<?php
class voiture{
    private ?int $id_vt = null;
    private ?string $marque_vt = null;
    private ?string $modele_vt = null;
    private ?string $matricule_vt = null;
    private ?int $prix_vt = null;
    private ?string $image_vt = null;
   
 

    public function __construct($id = null, $mar, $mod ,$mat,$prix ,$image)
    {
        $this->id_vt = $id;
        $this->marque_vt= $mar;
        $this->modele_vt= $mod;
        $this->matricule_vt = $mat;
      
        $this->prix_vt = $prix;
        $this->image_vt= $image;
      
    }

    /**
     * Get the value of idvoiture
     */
    public function getIdvoiture()
    {
        return $this->id_vt;
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque_vt;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setMarque($marque_vt)
    {
        $this->marque_vt = $marque_vt;

        return $this;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele_vt;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */
    public function setModele($modele_vt)
    {
        $this->modele_vt = $modele_vt;

        return $this;
    }

    /**
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule_vt;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule_vt)
    {
        $this->matricule_vt = $matricule_vt;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getprix()
    {
        return $this->prix_vt;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setprix($prix_vt)
    {
        $this->prix_vt= $prix_vt;

        return $this;
    }

    


    
     /**
     * Get the value of image
     */
    public function getImg()
    {
        return $this->image_vt;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImg($image_vt)
    {
        $this->image_vt= $image_vt;

        return $this;
    }
    
}


?>