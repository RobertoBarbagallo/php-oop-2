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
      try{
        $this->setName($name);
      }catch (Exception $e){
        echo "Errore: ". $e->getMessage(); 
      }

      try{
        $this->setLastname($lastname);
      }catch (Exception $e1){
        echo "Errore: ". $e1->getMessage(); 
      }

      try{
        $this->setEmail($email);
      }catch (Exception $e2){
        echo "Errore: ". $e2->getMessage(); 
      }

      try{
        $this->setCard($carta_di_credito);
      }catch (Exception $e3){
        echo "Errore: ". $e3->getMessage(); 
      }
      
      
      $this->setDate();
      
      $this->setStaus("new");
      
      $this->setUserId();

    }


    public function setUserId() {
    $string = $this->nome . $this->email;
    $idLength = 12;

    $userId = "";

    while (strlen($userId) <  $idLength) {
      $randNum = rand(0, strlen($string));
      $char = substr($string, $randNum, 1);
      $invalidChars = [".", "@"];

      if (!in_array($char, $invalidChars)) {
        $userId .= $char;
      }
    }

    $this->id = strtolower($userId);
      
    }
  
  

    public function getUserId() {
      return $this->id;
    }

   
    public function setName($value) {

      if(is_string($value)){
        $this->nome = $value;
      }else {
        throw new Exception("Devi inserire un valore di tipo 'stringa'");
      }
    }


    public function getName() {
        return $this->nome;
      }  


    public function setLastname($value) {

       if(is_string($value)){
        $this->cognome = $value;
      }else {
        throw new Exception("Devi inserire un valore di tipo 'stringa'");
      }
    }

    public function getLastname() {
        return $this->cognome;
      }    

    public function setEmail($value) {
        if(strpos($value, "@") && strpos($value, "@", strpos($value, "@"))){
          $this->email = $value;
        }else {
          throw new Exception("Non hai inserito una mail valida");
        }
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
      if(is_numeric($value)){
        $this->carta_di_credito = $value;
      }else {
        throw new Exception("Non hai inserito una carta valida");
      }  
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
