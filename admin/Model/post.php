<?php
class Post{
    private ?int $id_post = null;
    private ?string $txt_post = null;
    private ?int $id_admin = null;


    public function __construct($id = null, $t, $a)
    {
        $this->id_post = $id;
        $this->txt_post = $t;
        $this->id_admin = $a;
    }

    /**
     * Get the value of idClient
     */
    public function getIdpost()
    {
        return $this->id_post;
    }

    /**
     * Get the value of lastName
     */
    public function gettxtpost()
    {
        return $this->txt_post;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function settxtpost($txt_post)
    {
        $this->txt_post = $txt_post;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getidadmin()
    {
        return $this->id_admin;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setidadmin($id_admin)
    {
        $this->id_admin = $id_admin;

        return $this;
    }


    
}


?>
