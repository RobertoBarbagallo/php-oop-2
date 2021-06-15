<?php 


require(__DIR__ . "./user.php");

class PremiumUser extends User{

    public $sconto;
    public $puntiMaturati;
    public $Dataregistrazione;

    public function __construct()
    {
        $this->Dataregistrazione = $this->primoaccesso;
        $this->setSconto($this->Dataregistrazione);

    }

    

    public function setSconto($value) {
       

        if($value < "10, 3, 2001"){
           $this->sconto = 50;
        }
    
      }

    public function getSconto() {
        return $this->sconto;
      }  


}





?>