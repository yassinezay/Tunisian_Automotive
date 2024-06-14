<?php
class Admin{
    private ?int $id_admin = null;
    private ?string $nom_admin = null;
    private ?string $email_admin = null;
    private ?string $pw_admin = null;

    public function __construct($id = null, $n, $e, $pw)
    {
        $this->id_admin = $id;
        $this->nom_admin = $n;
        $this->email_admin = $e;
        $this->pw_admin = $pw;
    }

    /**
     * Get the value of idClient
     */
    public function getIdadmin()
    {
        return $this->id_admin;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->nom_admin;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($nom_admin)
    {
        $this->nom_admin = $nom_admin;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->email_admin;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($email_admin)
    {
        $this->email_admin = $email_admin;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getpw()
    {
        return $this->pw_admin;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setpw($pw_admin)
    {
        $this->pw_admin = $pw_admin;

        return $this;
    }
    
}


?>
