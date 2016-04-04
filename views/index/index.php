<div class="wrap white shadow1">
	<!-------------------------------------------PDPDUITS FRAIS------------------------------------------->
    <div class="row">
        <div class="col s12 m12">
            <h4>Les produits frais</h4>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s12">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-l">
                            <img width="100%" src="<?= $variables['produits'][0]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][0]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][0]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][0]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][0]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][0]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][0]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-s">
                            <img width="100%" src="<?= $variables['produits'][1]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][1]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][1]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][1]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][1]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][1]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][1]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-s">
                            <img width="100%" src="<?= $variables['produits'][2]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][2]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][2]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][2]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][2]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][2]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][2]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-s">
                            <img width="100%" src="<?= $variables['produits'][3]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][3]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][3]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][3]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][3]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][3]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][3]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-s">
                            <img width="100%" src="<?= $variables['produits'][4]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][4]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][4]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][4]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][4]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][4]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][4]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-l">
                            <img width="100%" src="<?= $variables['produits'][5]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['produits'][5]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['produits'][5]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['produits'][5]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['produits'][5]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['produits'][5]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['produits'][5]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-------------------------------------------SELECTION------------------------------------------->
	<div class="row">
		<div class="col s12">
			<h4>La séléction</h4>
		</div>
		<div class="col s6 margin-l-b">
			<div class="carousel">
				<?php for($i=0;$i<10;$i++){echo'
					<a class="carousel-item preview" href="#img'.$variables['produits'][$i]->id.'" data-nom="'.$variables['produits'][$i]->nom.'" data-description="'.$variables['produits'][$i]->synopsis.'" data-couleur="'.Categories::getNameById($variables['produits'][$i]->id_categorie)['color'].'" data-categorie="'.Categories::getNameById($variables['produits'][$i]->id_categorie)['nom'].'" data-note="'.$variables['produits'][$i]->avis_site.'">
						<img src="'.$variables['produits'][$i]->url_image.'">
					</a>';
				}?>
			</div>
		</div>
		<div class="col s6">
			<div class="card z-depth-0">
				<div class="card-content">
					<h5 id="view-nom" class="bold"></h5>
					<p id="view-description"></p>
					<p id="view-categorie"></p>
					<p>
						<i id="view-note"></i>
					</p>
					<br/>
					<a class="btn  blue waves waves-effect">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------------------------LES GROS SUCCES------------------------------------------->
    <div class="row">
        <div class="col m7 s12">
            <h4>Les gros succès</h4>
            <div class="row">
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-m">
                            <img width="100%" src="<?= $variables['bestProduits'][1]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][1]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][1]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][1]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][1]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['bestProduits'][1]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['bestProduits'][1]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-m">
                            <img width="100%" src="<?= $variables['bestProduits'][2]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][2]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][2]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][2]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][2]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['bestProduits'][2]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['bestProduits'][2]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-m">
                            <img width="100%" src="<?= $variables['bestProduits'][3]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][3]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][3]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][3]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][3]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['bestProduits'][3]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['bestProduits'][3]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card white hoverable pointer no-margin-b">
                        <div class="card-image jaquette-m">
                            <img width="100%" src="<?= $variables['bestProduits'][4]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][4]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][4]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][4]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][4]->id_categorie)['nom']; ?></p>
                            <p>
                                <i class="material-icons <?= Categories::getNameById($variables['bestProduits'][4]->id_categorie)['color']; ?>">
                                    <?php
										Produits::getStars((int)$variables['bestProduits'][4]->avis_site);
                                    ?>
                                </i>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="center"><a class="grey-text" href="#">Voir plus de gros succés</a></p>
                </div>
            </div>
        </div>
		
		<!-------------------------------------------LES GROS KIFFS------------------------------------------->
        
		<div class="col m5 s12">
            <h4>Les gros kiffs</h4>
            <div class="row">
                <div class="col s12">
                    <div class="card hoverable red darken-1">
                        <div class="card-image jaquette-l">
                            <img width="100%" src="<?= $variables['bestProduits'][5]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][5]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][5]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][5]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][5]->id_categorie)['nom']; ?></p>
                        </div>
                        <div class="card-action">
                            <a class="white-text" href="#">ça a l'air cool</a>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card hoverable red darken-1">
                        <div class="card-image jaquette-l">
                            <img width="100%" src="<?= $variables['bestProduits'][6]->url_image; ?>">
                        </div>
                        <div class="card-content">
                            <h5><strong><?= $variables['bestProduits'][6]->nom; ?></strong></h5>
                            <p><strong>Description : </strong><?= strip_tags(substr($variables['bestProduits'][6]->synopsis, 0, 50)) . '...'; ?></p>
                            <p class="<?= Categories::getNameById($variables['bestProduits'][6]->id_categorie)['color']; ?>"><?= Categories::getNameById($variables['bestProduits'][6]->id_categorie)['nom']; ?></p>
                        </div>
                        <div class="card-action">
                            <a class="white-text" href="#">ça me tente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h4>Les articles frais</h4>
            <div class="row valign-wrapper">
                <div class="col s2">					
                    <img class="materialboxed valign" data-caption="Deadpool" width="100%" src="<?php echo __BASE__; ?>media/img/jaquette2.jpg">
                </div>
                <div class="col s10">
                    <h5>Borderlands 2 - Le jeu qui possède des armes à l'infini</h5>
                    <p>
                        Lorem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor ...
                        <br/>
                        <a class="grey-text">Lire la suite</a>
                    </p>
                    <blockquote>
                        <div class="chip">
                            <img src="<?php echo __BASE__; ?>media/img/avatar.png" alt="Contact Person">
                            Geoffrey HERMIN
                        </div> - 10/06/2015
                    </blockquote>
                </div>
            </div>
            <div class="row valign-wrapper">
                <div class="col s2">					
                    <img class="materialboxed valign" data-caption="Deadpool" width="100%" src="<?php echo __BASE__; ?>media/img/jaquette1.jpg">
                </div>
                <div class="col s10">
                    <h5>Deadpool - ça déchire</h5>
                    <p>
                        Lorem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor ...
                        <br/>
                        <a class="grey-text">Lire la suite</a>
                    </p>
                    <blockquote>
                        <div class="chip">
                            <img src="<?php echo __BASE__; ?>media/img/avatar2.png" alt="Contact Person">
                            Christophe HACHIN
                        </div> - 10/06/2015
                    </blockquote>
                </div>
            </div>
            <div class="row valign-wrapper">
                <div class="col s2">					
                    <img class="materialboxed valign" data-caption="Deadpool" width="100%" src="<?php echo __BASE__; ?>media/img/jaquette4.jpg">
                </div>
                <div class="col s10">
                    <h5>ACDC - La glace est noire</h5>
                    <p>
                        Lorem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor orem ipsum dolor sit amet Lorem ipsum dolor ...
                        <br/>
                        <a class="grey-text">Lire la suite</a>
                    </p>
                    <blockquote>
                        <div class="chip">
                            <img src="<?php echo __BASE__; ?>media/img/avatar.png" alt="Contact Person">
                            Geoffrey HERMIN
                        </div> - 10/06/2015
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    <a class="grey-text">Voir tous les articles</a>
                </div>
            </div>
        </div>
    </div>
</div>