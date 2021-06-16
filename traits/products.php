<?php  
trait Product{

    private $id;
    private $nome;
    private $quantita_disponibili;
    private $prezzo;
    
    

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

    public function setItemsNumber($value){
            if(is_numeric($value)){
              $this->quantita_disponibili = $value;
            }else {
              throw new Exception("Non hai inserito un numero non valido");
            }  
        }  
      
    public function getItemsNumber() {
          return $this->quantita_disponibili;
        }   
      
    public function setPrice($value){
            if(is_numeric($value)){
              $this->prezzo = $value;
            }else {
              throw new Exception("Non hai inserito un prezzo non valido");
            }  
        }  
      
    public function getPrice() {
          return $this->prezzo;
        }   
          

}
