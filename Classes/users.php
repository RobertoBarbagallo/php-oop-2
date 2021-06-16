<?php 

class User{
    protected $id;
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $telefono;
    protected $carta_di_credito;
    protected $status;
    protected $data;


    public function __construct($name, $lastname, $email, $status = "default", $carta_di_credito = "non inserita" )
    {
        $this->setUserId();
        $this->setName($name);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setCard($carta_di_credito);
        $this->setDate();
        $this->setStaus("new");

    }


    //manca id
    public function setUserId() {
      $this->id = "myId";
    }
  
  

    public function getUserId() {
      return $this->id;
    }

   
    public function setName($value) {
        $this->nome = $value;
    
      }

    public function getName() {
        return $this->nome;
      }  


    public function setLastname($value) {
        $this->cognome = $value;
    
      }

    public function getLastname() {
        return $this->cognome;
      }    

    public function setEmail($value) {
        $this->email = $value;
    
      }

    public function getEmail() {
        return $this->email;
      }  
      
    public function setAddress($value) {
        $this->indirizzo = $value;
    
      }

    public function getAddress() {
        return $this->indirizzo;
      }  
      
    public function setTel($value) {
        $this->telefono = $value;
    
      }

    public function getTel() {
        return $this->telefono;
      }   

    public function setCard($value){
        $this->carta_di_credito = $value;
    }  

    public function getCard() {
        return $this->carta_di_credito;
      }   

    public function setStaus($value){
        $this->status = $value;
    }  

    public function getStaus() {
        return $this->status;
      } 
      
    public function  setDate(){
        $this->data = date("Y-m-j");  
    }  

    public function getDate(){
        return $this->data;
    }

}
