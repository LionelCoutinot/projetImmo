<?php
require'error.php';
require'Photos.php';
$id=$_GET['id'];


class PhotosManager {
   

    public static function getImageById($id) {
        $db=dbconnect();
        $query=$db->query('SELECT bien.id, bien.titre, bien.prix, bien.description,bien.thumbnail, bien.surface,bien.adresse, bien.pieces, photos.image  FROM bien INNER JOIN photos ON bien.id=photos.bien WHERE bien.id='.$id);  
        $image = $query -> fetchAll(PDO::FETCH_CLASS, 'Photos');
     
        return $image;
    }
   
}
