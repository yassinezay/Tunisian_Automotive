<?php
class Vehicule
{
    private  $idVehicule = null;
    private $model = null;
    private  $marque = null;
    private  $prix = null;
    private  $boite = null;

    public function __construct($id = null, $n, $p, $a, $d)
    {
        $this->idVehicule = $id;
        $this->model = $n;
        $this->marque = $p;
        $this->prix = $a;
        $this->boite = $d;
    }

    /**
     * Get the value of idVehicule
     */
    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    /**
     * Get the value of model
     */
    public function getmodel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setmodel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of marque
     */
    public function getmarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setmarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of matricule
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->matricule = $prix;

        return $this;
    }
    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setboite($boite)
    {
        $this->boite = $boite;

        return $this;
    }


    public function getboite()
    {
        return $this->boite;
    }

    


}
