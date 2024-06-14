<?php
class Message{
    private ?int $id_message = null;
    private ?string $texte_message = null;
    private ?DateTime $date_message = null;
    private ?string $heure_message = null;
    private ?int $id_user = null;

    public function __construct($id = null, $t, $d, $h, $iu)
    {
        $this->id_message=$id;
        $this->texte_message=$t;
        $this->date_message=$d;
        $this->heure_message =$h;
        $this->id_user =$iu;
    }

    /**
     * Get the value of idClient
     */
    public function getIdmessage()
    {
        return $this->id_message;
    }

    /**
     * Get the value of lastName
     */
    public function getmessage()
    {
        return $this->texte_message;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setmessage($texte_message)
    {
        $this->texte_message=$texte_message;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getdate()
    {
        return $this->date_message;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setdate($date_message)
    {
        $this->date_message=$date_message;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getheure()
    {
        return $this->heure_message;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setheure($heure_message)
    {
        $this->heure_message=$heure_message;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getiduser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setiduser($id_user)
    {
        $this->id_user=$id_user;

        return $this;
    }
    
}


?>
