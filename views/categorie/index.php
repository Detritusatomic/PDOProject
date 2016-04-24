<div class="wrap white shadow1">
    <!-------------------------------------------PDPDUITS FRAIS------------------------------------------->
    <div class="row">
        <div class="col s12 m12">
            <h4>Les <?=$variables['categorie'][0]['nom']?></h4>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s12">
                    <?=Produits::display($variables['produits'][0])?>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                   <?=Produits::display($variables['produits'][3])?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['produits'][4])?>
                </div>
            </div>
        </div>
        <div class="col m6 s12">
            <div class="row">
                <div class="col s6">
                    <?=Produits::display($variables['produits'][1])?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['produits'][2])?>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <?=Produits::display($variables['produits'][5])?>
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
                <?php for($i=0;$i<5;$i++){echo'
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
                    <p>
                        <i id="view-note"></i>
                    </p>
                    <p id="view-categorie"></p>
                    <br/>
                    <a id="view-btn">ça me tente</a>
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
                    <?=Produits::display($variables['produits'][1])?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['produits'][2])?>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <?=Produits::display($variables['produits'][3])?>
                </div>
                <div class="col s6">
                    <?=Produits::display($variables['produits'][4])?>
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
                    <?=Produits::display($variables['produits'][0],'kiff')?>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <?=Produits::display($variables['produits'][1],'kiff')?>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------TOUS LES <?=$variables['categorie'][0]['nom']?>------------------------------------------->
    <div class="row">
        <div class="col s12">
            <h4>La liste des <?=$variables['categorie'][0]['nom']?></h4>
            <div class="row">
                <table class="responsive-table highlight">
                    <tbody>
                    <?php foreach ($variables['produits'] as $key => $p) : ?>
                        <tr class="row">
                            <td class="col s2"><img class="responsive-img" src="<?= $p->url_image; ?>" height="160"/></td>
                            <td class="col s2"><?=$p->nom;?></td>
                            <td class="col s2"><?=$p->genre;?></td>
                            <td class="col s1 <?=$p->color;?>"><?=$p->avis_site;?>/10</td>
                            <td class="col s5"><?=$p->synopsis;?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>