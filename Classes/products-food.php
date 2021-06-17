<?php

require_once( __DIR__ . "/../traits/products.php");

class Food{
    use Product;
    private $data_scadenza;
    private $categoria;

    public function __construct($nomeProdotto, $disponibilita, $prezzo)
    { 
        try{
            $this->setName($nomeProdotto);
          }catch (Exception $e){
            echo "Errore: ". $e->getMessage(); 
          }
        try{
            $this->setItemsNumber($disponibilita);
          }catch (Exception $e1){
            echo "Errore: ". $e1->getMessage(); 
          }  
        try{
            $this->setPrice($prezzo);
          }catch (Exception $e2){
            echo "Errore: ". $e2->getMessage(); 
          }    
    
        $this->setPrice($prezzo);
        
    }

}


?>