<?php
 require'model/error.php';
 require'partials/header.php';
?>
<div class="container pt-5">
    <div class="row">
        <h1 class="title mb-5">Immo Limoges POO</h1>
        <div class="col-12 col-md-8  offset-md-2">
            <p>
                <img src="<?php  echo $bien ->getThumbnail();?>" class="img-fluid">									
			</p>
        </div>
       <div class="col-12 col-md-8 offset-md-2">
            <div class="panel panel-primary mb-5">
                <div class="panel-body">
                    <h5 class="text-on-pannel text-secondary"><strong class="text-uppercase"><?php
                    echo $bien ->getTitre(); ?></strong></h5>
                </div>
                <ul>
                    <li>
                        <h5 class=" text-danger text-start"><strong><?php echo number_format($bien ->getPrix(),2,",","."); ?> €</strong></h5>
                    </li>
                    <li>
                        <h5> <?php echo $bien ->getDescription(); ?></h5>
                    </li>
                    <li>
                        <h5> <?php echo $bien ->getSurface(); ?> m<sup>2</sup></h5>
                    </li>
                    <li>
                        <h5> <?php echo $bien ->getAdresse(); ?></h5>
                    </li>
                    <li>
                        <h5> <?php echo $bien ->getPieces(); ?> pièce(s)</h5>
                    </li>
                    <li>
                        <h5> Catégorie : <?php echo $bien ->nom; ?></h5>
                    </li>
                </ul>
            </div>
        </div>
        <div class="localisation pb-5">
            <p>
                 —   <?php  echo $bien ->getAdresse(); ?>
            </p> 
            <p class="text-center">
                <?php  echo ($bien ->getLocalisation());?>
            </p>     
		</div>       
        <div class="row pt-5">
            <h3 class="text-center mb-5  title2">Photos :</h3>
            <div class="col-12 col-md-8  offset-md-2">
                <div class="text-center pb-5">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="<?php  echo $bien ->getThumbnail();?>" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <?php foreach($photos_list as $photo): ?>
                            <div class="carousel-item" data-bs-interval="10000">     
                                <img src="<?php  echo $photo -> getImage();?>" title="<?php  echo $photo -> getImage();?>" class="">
                            </div>    
                            <?php endforeach;?>	
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> 
                    </div>
	                <p class="mt-5">
                        <a href="index.php"><button type="button" class="btn color-button">Accueil</button></a>
                    </p>                    
                </div>
            </div>
        </div>

<?php
 require 'partials/footer.php';
?>