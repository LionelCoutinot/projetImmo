<?php
 require'model/error.php';
 require'partials/header.php';
?>
<div class="container pt-5">
    <div class="row ">
        <h1 class="title pb-5">Immo Limoges POO</h1>
        <?php foreach($bien_list as $bien): ?>
            <div class="col-12 col-md-4 pb-4">
                <div class="card">                        
                    <div class="card-body">
                        <p class="card-text">
                            <img src="<?php  echo $bien ->getThumbnail();?>" class="card-img-top img-fluid">									
						</p>
						<div>
						    <p>						        
				                <h4  class="text-muted"><?php echo $bien ->getTitre(); ?> </h4>  
					        </p>
					        <p>
						        <h4 class="text-danger"><strong><?php echo number_format($bien ->getPrix(),2,",","."); ?> €</strong></h4>
					        </p>
                            <p>
                                <h6> <?php  echo $bien ->getDescription(); ?></h6>
                            </p>
                            <p>
                                <h6><?php  echo $bien ->getSurface(); ?> m<sup>2</sup></h6>
                            </p> 
                            <p>
                                <h6><?php  echo $bien ->getAdresse(); ?></h6>
                            </p> 
                            <p>
                                <h6><?php  echo $bien ->getPieces(); ?> pièce(s)</h6>
                            </p> 
                            <p>
                                <h6> Catégorie :   <?php  echo $bien ->nom; ?></h6>
                            </p>
                             <p class="text-center pt-5">
                                 <a href="single.php?id=<?php echo $bien ->getId()?>"><button type="button" class="btn color-button">Détails</button></a>
                            </p>                    
                        </div>
                    </div>
                </div>        
		    </div>
            <?php endforeach;?>
        </div>
            </div>
      
   



<?php
 require 'partials/footer.php';
?>

