<?php
class raoufu{
    private  $id = null;
    private  $tel = null;
    private  $kilom = null;
    private  $mail = null;
    private  $addit = null;
    private  $selectrelac = null;
    public function __construct($id = null, $a, $b,$c,$d)
    {
        $this->id = $id;
        $this->tel = $a;
        $this->mail = $b;
        $this->addit = $c;
        $this->selectrelac = $d;
    }
    /**
     * Get the value of id
     */
    public function getiditem()
    {
        return $this->id;
    }
    /**
     * Get the value of name
     */
    public function gettel()
    {
        return $this->tel;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function settel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getmail()
    {
        return $this->mail;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setmail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getaddit()
    {
        return $this->addit;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setaddit($addit)
    {
        $this->addit = $addit;

        return $this;
    }




    /**
     * Get the value of name
     */
    public function getselectrelac()
    {
        return $this->selectrelac;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setselectrelac($selectrelac)
    {
        $this->selectrelac = $selectrelac;

        return $this;
    }

    
}
class raoufw{
    private  $id = null;
    private  $modelevoi = null;
    private  $kilom = null;
    private  $timee = null;
    private  $tel = null;
    private  $mail = null;
    private  $addit = null;
    public function __construct($id = null, $a, $b,$c,$d,$e,$f)
    {
        $this->id = $id;
        $this->modelevoi = $a;
        $this->kilom = $b;
        $this->timee = $c;
        $this->tel = $d;
        $this->mail = $e;
        $this->addit = $f;
    }
    /**
     * Get the value of id
     */
    public function getiditem()
    {
        return $this->id;
    }
    /**
     * Get the value of name
     */
    public function getmodelevoi()
    {
        return $this->modelevoi;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setmodelevoi($modelevoi)
    {
        $this->modelevoi = $modelevoi;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getkilom()
    {
        return $this->kilom;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setkilom($kilom)
    {
        $this->kilom = $kilom;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getdate()
    {
        return $this->timee;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setdate($timee)
    {
        $this->timee = $timee;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function gettel()
    {
        return $this->tel;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function settel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getmail()
    {
        return $this->mail;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setmail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
    /**
     * Get the value of name
     */
    public function getaddit()
    {
        return $this->addit;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setaddit($addit)
    {
        $this->addit = $addit;

        return $this;
    }
}

class raouf{
    private  $id = null;
    private  $name = null;
    private  $type = null;
    private  $img = null;
    private  $price = null;
    private  $des = null;
    public function __construct($id = null, $n, $p, $a, $d,$e)
    {
        $this->id = $id;
        $this->name = $n;
        $this->type = $p;
        $this->img = $a;
        $this->price = $d;
        $this->des = $e;
    }
    /**
     * Get the value of id
     */
    public function getiditem()
    {
        return $this->id;
    }
    /**
     * Get the value of name
     */
    public function getnameitem()
    {
        return $this->name;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setnameitem($name)
    {
        $this->name = $name;

        return $this;
    }	
    /**
     * Get the value of type
     */
    public function gettypeitem()
    {
        return $this->type;
    }
    /**
     * Set the value of type
     *
     * @return  self
     */
    public function settypeitem($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Get the value of img
     */
    public function getimgpath()
    {
        return $this->img;
    }
    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setimgpath($img)
    {
        $this->img = $img;
        return $this;
    }
    /**
     * Get the value of price
     */
    public function getpriceitem()
    {
        return $this->price;
    }
    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setpriceitem($price)
    {
        $this->price = $price;
        return $this;
    }		
    /**
     * Get the value of des
     */
    public function getdescription()
    {
        return $this->des;
    }
    /**
     * Set the value of des
     *
     * @return  self
     */
    public function setdescription($des)
    {
        $this->des = $des;
        return $this;
    }	

























	
	
}



