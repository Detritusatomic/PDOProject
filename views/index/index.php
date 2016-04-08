<div class="wrap white shadow1">
	<!-------------------------------------------PDPDUITS FRAIS------------------------------------------->
    <div class="row">
        <div class="col s12 m12">
            <h4>Les produits frais</h4>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s12">
                    <?=Produits::display($variables['produits'][0]->id)?>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                     <?=Produits::display($variables['produits'][1]->id)?>
                </div>
                <div class="col s6">
                     <?=Produits::display($variables['produits'][2]->id)?>
                </div>
            </div>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s6">
                     <?=Produits::display($variables['produits'][3]->id)?>
                </div>
                <div class="col s6">
                     <?=Produits::display($variables['produits'][4]->id)?>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                     <?=Produits::display($variables['produits'][5]->id)?>
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
    <div class="row">
	<!-------------------------------------------LES GROS SUCCES------------------------------------------->
        <div class="col m7 s12">
            <h4>Les gros succès</h4>
            <div class="row">
                <div class="col s6">
                    <?=Produits::display($variables['bestProduits'][1]->id)?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['bestProduits'][2]->id)?>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <?=Produits::display($variables['bestProduits'][3]->id)?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['bestProduits'][4]->id)?>
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
                    <?=Produits::display((int)$variables['kiffs'][0]['value'],'kiff')?>
                </div>
			</div>
            <div class="row">
                <div class="col s12">
                    <?=Produits::display((int)$variables['kiffs'][1]['value'],'kiff')?>
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