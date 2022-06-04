<?php
require'error.php';

// les propriétés de l'objet
class Photos {  
    private int $id;
    private string $image;
    private  int $bien;
   
 


   /* Les accesseurs */

   public  function getImage() {
       return $this -> image;
   }


   public function getBien() {
       return $this->bien;
   }

   

   /* Les setters */
  


}