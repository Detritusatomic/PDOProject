<div class="wrap white shadow1">
    <!-------------------------------------------PDPDUITS FRAIS------------------------------------------->
    <div class="row">
        <?php if (!isset($variables['categorie'])) : ?>
            <div class="col s12 m12">
                <h4>Les produits frais</h4>
            </div>
        <?php else : ?>
            <div class="col s12 m12">
                <h4>Les <?= $variables['categorie'][0]['nom'] ?></h4>
            </div>
        <?php endif; ?>

        <div class="hide-on-small-only">
            <div class="col m6">
                <div class="row">
                    <div class="col m12">
                        <?php if (isset($variables['produits'][0])) echo Produits::display($variables['produits'][0]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col l6 m12">
                        <?php if (isset($variables['produits'][3])) echo Produits::display($variables['produits'][3]) ?>
                    </div>
                    <div class="col l6 m12">
                        <?php if (isset($variables['produits'][4])) echo Produits::display($variables['produits'][4]) ?>
                    </div>
                </div>
                <div class="hide-on-med-only">
                    <div class="row">
                        <div class="col m12">
                            <?php if (isset($variables['produits'][6])) echo Produits::displaySmall($variables['produits'][6]) ?>
                        </div>
                        <div class="col m12">
                            <?php if (isset($variables['produits'][7])) echo Produits::displaySmall($variables['produits'][7]) ?>
                        </div>
                    </div>
                </div>
                <div class="hide-on-large-only">
                    <div class="row">
                        <div class="col m12">
                            <?php if (isset($variables['produits'][6])) echo Produits::display($variables['produits'][6]) ?>
                        </div>
                        <div class="col m12">
                            <?php if (isset($variables['produits'][7])) echo Produits::display($variables['produits'][7]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m6">
                <div class="row">
                    <div class="col l6 m12">
                        <?php if (isset($variables['produits'][1])) echo Produits::display($variables['produits'][1]) ?>
                    </div>
                    <div class="col l6 m12">
                        <?php if (isset($variables['produits'][2])) echo Produits::display($variables['produits'][2]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <?php if (isset($variables['produits'][5])) echo Produits::display($variables['produits'][5]) ?>
                    </div>
                </div>
                <div class="hide-on-med-only">
                    <div class="row">
                        <div class="col m12">
                            <?php if (isset($variables['produits'][8])) echo Produits::displaySmall($variables['produits'][8]) ?>
                        </div>
                        <div class="col m12">
                            <?php if (isset($variables['produits'][9])) echo Produits::displaySmall($variables['produits'][9]) ?>
                        </div>
                    </div>
                </div>
                <div class="hide-on-large-only">
                    <div class="row">
                        <div class="col m12">
                            <?php if (isset($variables['produits'][8])) echo Produits::display($variables['produits'][8]) ?>
                        </div>
                        <div class="col m12">
                            <?php if (isset($variables['produits'][9])) echo Produits::display($variables['produits'][9]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide-on-med-and-up">
            <div class="col s12">
                <?php
                $cpt = 0;
                foreach ($variables['produits'] as $v) {
                    if ($cpt < 6)
                        echo Produits::displayMobile($v);
                    if ($cpt < 5)
                        echo '<div class="divider"></div>';
                    $cpt++;
                }
                ?>
            </div>
        </div>
    </div>

    <!-------------------------------------------SELECTION------------------------------------------->
    <div class="row">
        <div class="col m12">
            <h4>La séléction</h4>
        </div>
        <div class="col m6 s12 margin-l-b">
            <div class="carousel">
                <?php for ($i = 0; $i < 10; $i++) {
                    echo'
					<a class="carousel-item preview" href="#img' . $variables['produits'][$i]->id . '" data-nom="' . $variables['produits'][$i]->nom . '" data-description="' . $variables['produits'][$i]->synopsis . '" data-couleur="' . Categories::getNameById($variables['produits'][$i]->id_categorie)['color'] . '" data-categorie="' . Categories::getNameById($variables['produits'][$i]->id_categorie)['nom'] . '" data-note="' . $variables['produits'][$i]->avis_site . '">
						<img src="' . $variables['produits'][$i]->url_image . '">
					</a>';
                }
                ?>
            </div>
        </div>
        <div class="col m6 s12">
            <div class="card transparent z-depth-0">
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
        <!-------------------------------------------LES GROS KIFFS------------------------------------------->
        <div class="col l5 m6 s12 push-l7 push-m6 ">
            <h4>Les gros kiffs</h4>
            <div class="row">
                <div class="col m12">
                    <?= Produits::display($variables['kiffs'][0], 'kiff') ?>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
<?= Produits::display($variables['kiffs'][1], 'kiff') ?>
                </div>
            </div>
        </div>
        <!-------------------------------------------LES GROS SUCCES------------------------------------------->
        <div class="col l7 m6 s12 pull-l5 pull-m6 hide-on-small-only">
            <h4>Les gros succès</h4>
            <div class="hide-on-large-only">
                <div class="row">
                    <div class="col m12">		
                        <?php
                        for ($i = 0; $i < 6; $i++) {
                            echo Produits::displayMobile($variables['bestProduits'][$i]);
                            if ($i < 5)
                                echo '<div class="divider"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="hide-on-med-only">
                <div class="row">
                    <div class="col l6">
<?= Produits::display($variables['bestProduits'][0]) ?>
                    </div>
                    <div class="col l6">
                        <?= Produits::display($variables['bestProduits'][1]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col l6">
<?= Produits::display($variables['bestProduits'][2]) ?>
                    </div>
                    <div class="col l6">
                        <?= Produits::display($variables['bestProduits'][3]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12">
<?= Produits::displaySmall($variables['bestProduits'][4]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide-on-med-and-up">
            <div class="col s12">		
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo Produits::displayMobile($variables['bestProduits'][$i]);
                    if ($i < 5)
                        echo '<div class="divider"></div>';
                }
                ?>
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