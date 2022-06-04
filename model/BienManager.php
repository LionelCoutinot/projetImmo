<?php
require'error.php';
require'connection.php';
require'Bien.php';






class BienManager {
    public static function getAllBiens() {
        $db=dbconnect();
        $query=$db->query('SELECT bien.id, bien.titre, bien.prix, bien.description,bien.thumbnail, bien.surface,bien.adresse, bien.localisation, bien.pieces, type.nom  FROM bien INNER JOIN type WHERE bien.type=type.id'); 
        $bien = $query -> fetchAll(PDO::FETCH_CLASS, 'Bien');
        return $bien;
    }

    public static function getBienById($id) {
        $db=dbconnect();
        $query=$db->query('SELECT bien.id, bien.titre, bien.prix, bien.description,bien.thumbnail, bien.surface,bien.adresse, bien.localisation, bien.pieces, type.nom  FROM bien INNER JOIN type ON bien.type=type.id WHERE bien.id='.$id);  
        $query->setFetchMode(PDO::FETCH_CLASS, 'Bien');
        $bienSolo = $query->fetch();
        return $bienSolo;
    }
}

