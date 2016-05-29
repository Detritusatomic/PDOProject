<div class="wrap white shadow1">
    <div class="row">
        <div class="col m12">
            <h4>Le gros panier</h4>
        </div>
        <div class="col m8">
            <form id="panierForm" action="" method="post">
                <input type="hidden" name="confirm_panier" value="1"/>
                <?php if ($variables['produits']) { ?>
                    <?php foreach ($variables['produits'] as $produit): ?>
                        <div id="panierrow<?= $produit->id ?>" class="row">
                            <div class="col s3">
                                <img class="materialboxed" data-caption="<?= $produit->nom; ?>" width="100%" src="<?= $produit->url_image; ?>">
                            </div>
                            <div class="col s7">
                                <h5><?= $produit->nom; ?></h5>
                                <input type="hidden" name="idp[]" value="<?= $produit->id; ?>"/>
                                <input type="hidden" name="prix<?= $produit->id; ?>" value="<?= number_format(intval($produit->nb) * (float) str_replace(',', '.', $produit->prix), 2); ?>"/>
                                <input type="hidden" name="version<?= $produit->id; ?>" value=""/>
                                <p class="green-text">Il reste <?= $produit->quantite ?> exemplaire<?php echo ($produit->quantite > 1 ? 's' : '') ?></p>
                                <div class="switch">
                                    <label>
                                        <p class="no-padding no-margin btnversion <?= $produit->getTextColor() ?> waves-effect btn-flat">Version physique</p>
                                        <input type="checkbox" id="checkbox_version" data-textcolor="<?= $produit->getTextColor() ?>">
                                        <span class="lever <?= $produit->getColor() ?>"></span>
                                        <p class="no-padding no-margin btnversion waves-effect btn-flat">Version numérique</p>
                                    </label>
                                </div>
                                <br/>
                                <button class="btn waves-effect waves-light red" type="button"><i class="material-icons white-text">delete</i></button>
                            </div>
                            <div class="col s2">
                                <div class="input-field">
                                    <input data-idproduit="<?= $produit->id; ?>" name="qte<?= $produit->id; ?>" id="quantite" class="validate upQuantity" type="number" min="0" max="99" value="<?= $produit->nb; ?>">
                                    <label for="quantite">Quantité</label>
                                </div>
                                <p class="<?= $produit->getTextColor() ?>"><?= $produit->prix ?>€</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <br/>
                    <?php endforeach; ?>
                <?php } ?>
            </form>
        </div>
        <div class="col m4 s12">
            <?php if ($variables['produits']) { ?>
                <div class="z-depth-1 card white no-padding">
                    <div class="card-content">
                        <h4>On récapépète</h4>
                        <h5>3 Articles</h5>
                        <ul>
                            <?php $prix = 0.00; ?>
                            <?php foreach ($variables['produits'] as $produit): ?>
                                <?php $prix += floatval($produit->nb) * floatval(str_replace(',', '.', $produit->prix)); ?>
                                <li id="recapPanier<?= $produit->id; ?>"><?= $produit->nom; ?> <span>(x<span class="recapPriceProduit"><?= $produit->nb; ?></span>)</span><span class="right"><span class="recapRealyPriceLine"><?= number_format(intval($produit->nb) * (float) str_replace(',', '.', $produit->prix), 2); ?></span>€</span></li>
                            <?php endforeach; ?>
                            <br/>
                            <li>Frais de port</li>
                        </ul>
                        <h5 class="red-text">Total <span class="right"><span class="recapTotalPrice"><?= $prix; ?></span>€</span></h5>
                    </div>
                    <div class="card-action clearfix">
                        <button type="button" class="submitPanierButton z-depth-0 btn brown darken-4 waves-light waves-effect">Je craque</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <a class="btn red darken-1 waves-light waves-effect" href="#">Vider le panier</a>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h4>La méthode de livraison</h4>
            <ul>
                <li><strong>Gratuit</strong> : 0€</li>
                <li><strong>Colissimo</strong> : 15€</li>
                <li><strong>H1 Space custom ultimate release full premium limited edition</strong> : 100€</li>
                <li><strong>Un avion</strong> : 10€</li>
            </ul>
        </div>
    </div>
</div>