<?php
require'error.php';

// les propriétés de l'objet
class Bien {  
    private int $id;
    private string $titre;
    private  float $prix;
    private string $description;
    private string $thumbnail;
    private int $surface;
    private string $adresse;
    private $localisation;
    private int $pieces;
    private int $type;



   /* Les accesseurs */

   public  function getId() {
    return $this -> id;
}

   public  function getTitre() {
       return $this -> titre;
   }

   public function getPrix() {
       return $this->prix;
   }

   public function getDescription() {
    return $this->description;
}

     public function getThumbnail() {
    return $this->thumbnail;
}

    public function getSurface() {
    return $this->surface;
    }

    public function getAdresse() {
        return $this->adresse;
        }

     public function getLocalisation() {
        return $this->localisation;
            } 

    public function getPieces() {
            return $this->pieces;
            }

    public function getType() {
            return $this->type;
                }



   /* Les setters  */
  



}