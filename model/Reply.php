<?php
class Reply{
    private ?int $id_reply = null;
    private ?string $texte_reply = null;
    private ?DateTime $date_reply = null;
    private ?string $heure_reply = null;
    private ?int $id_message = null;
    private ?int $id_user = null;

    public function __construct($id = null, $t, $d, $h, $im,$iu)
    {
        $this->id_reply=$id;
        $this->texte_reply=$t;
        $this->date_reply=$d;
        $this->heure_reply =$h;
        $this->$id_message =$im;
        $this->id_user =$iu;
    }

    /**
     * Get the value of idClient
     */
    public function getIdreply()
    {
        return $this->id_reply;
    }

    /**
     * Get the value of lastName
     */
    public function getreply()
    {
        return $this->texte_reply;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setreply($texte_reply)
    {
        $this->texte_reply=$texte_reply;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getdate()
    {
        return $this->date_reply;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setdate($date_reply)
    {
        $this->date_reply=$date_reply;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getheure()
    {
        return $this->heure_reply;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setheure($heure_reply)
    {
        $this->heure_reply=$heure_reply;

        return $this;
    }
    public function getidmessage()
    {
        return $this->id_message;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setidmessage($id_message)
    {
        $this->id_message=$id_message;

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
