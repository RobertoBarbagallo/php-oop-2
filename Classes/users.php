<?php 

class User{
    public $id;
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $telefono;
    public $carta_di_credito;
    public $status;
    public $primoaccesso;

    public function __construct($name, $lastname, $email, $status = "default", $carta_di_credito = "non inserita" )
    {
        $this->setID();
        $this->setName($name);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setCard($carta_di_credito);
        $this->primoaccesso = $this->setDate();
        $this->setStaus("new");

    }

    public function setID(){
      
      $this->id ="ciao";
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
        $this->data = date("Y-n-j");  
    }  

    public function getDate(){
        return $this->data;
    }

}
