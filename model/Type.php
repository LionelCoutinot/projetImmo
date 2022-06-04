<?php
require'error.php';

// les propriétés de l'objet
class Type {  
    private int $id;
    private string $nom;
    private  int $hp;
    private int $atk;
  


   /* Les accesseurs */

   public  function getNom() {
       return $this -> nom;
   }


      /* Les setters  */
 


}