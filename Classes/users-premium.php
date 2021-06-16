<?php 


require_once(__DIR__ . "/users.php");

class PremiumUser extends User{


    private $sconto;
    private $puntiMaturati;
    private $dataregistrazione;

    public function __construct($user)
    {

        $this->dataregistrazione = $user->data;
        $this->setSconto($this->dataregistrazione);
        $this->status = "premium";

    }


    public function setSconto($value) {
        if(strtotime($value) < strtotime("2019-03-01")){
           $this->sconto = 50;
        }else{
        $this->sconto = 0;}

    }

    public function getSconto() {
         return $this->sconto;
    }  


}
