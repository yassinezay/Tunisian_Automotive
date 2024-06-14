<?php
class reserv{
    private ?int $id_resrv = null;
    private ?string $date_reserv = null;
    private ?int $id_vt= null;


    public function __construct($id = null, $d,$idvt)
    {
        $this->id_reserv= $id;
        $this->date_reserv = $d;
        $this->id_vt= $idvt;
    }

    /**
     * Get the value of idreserv
     */
    public function getidreserv()
    {
        return $this->id_reserv;
    }

    /**
     * Get the value of date
     */
    public function getdate()
    {
        return $this->date_reserv;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setdate($date_reserv)
    {
        $this->date_reserv= $date_reserv;

        return $this;
    }
    public function getidvt()
    {
        return $this->id_vt;
    }
   

    public function setidvt($id_vt)
    {
        return $this;
    }
    
}


?>