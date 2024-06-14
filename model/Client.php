<?php
class Client{
    private ?int $id_user = null;
    private ?string $nom_user = null;
    private ?string $prenom_user = null;
    private ?string $email_user = null;
    private ?string $pw_user = null;

    public function __construct($id = null, $n, $p, $e, $pw)
    {
        $this->id_user = $id;
        $this->nom_user = $n;
        $this->prenom_user = $p;
        $this->email_user = $e;
        $this->pw_user = $pw;
    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->id_user;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->nom_user;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($nom_user)
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->prenom_user;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($prenom_user)
    {
        $this->prenom_user = $prenom_user;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->email_user;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getpw()
    {
        return $this->pw_user;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setpw($pw_user)
    {
        $this->pw_user = $pw_user;

        return $this;
    }
    
}


?>
