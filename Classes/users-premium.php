<?php 


require_once(__DIR__ . "/users.php");

class PremiumUser extends User{

    protected $sconto;
    protected $puntiMaturati;
    protected $dataregistrazione;

    public function __construct()
    {
        $this->Dataregistrazione = $this->data;
        $this->setSconto($this->dataregistrazione);
        $this->status = "premium";

    }

    

    public function setSconto($value) {
       
        //funziona al contrario?
        
        if(strtotime($value) < strtotime("2001-03-01")){
           $this->sconto = 50;
        }else{
        $this->sconto = 0;}

    }

    public function getSconto() {
         return $this->sconto;
    }  


}
