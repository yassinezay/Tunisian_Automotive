<?php
class Vehicule
{
    private  $idVehicule = null;
    private $model = null;
    private  $marque = null;
    private  $matricule = null;
    private  $dof = null;

    public function __construct($id = null, $n, $p, $a, $d)
    {
        $this->idVehicule = $id;
        $this->model = $n;
        $this->marque = $p;
        $this->matricule = $a;
        $this->dof = $d;
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
    public function getmatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setmatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of dof
     */
    public function getdof()
    {
        return $this->dof;
    }

    /**
     * Set the value of dof
     *
     * @return  self
     */
    public function setdof($dof)
    {
        $this->dof = $dof;

        return $this;
    }
}
