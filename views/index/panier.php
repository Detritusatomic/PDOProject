<div class="wrap white shadow1">
    <div class="row">
        <div class="col m12">
            <h4>Votre panier</h4>
        </div>
        <form action="" method="post">
            <div class="col s8">
                <input type="hidden" name="confirm_panier" value="1"/>
                <?php foreach ($variables['produits'] as $produit): ?>
                    <div class="row">
                        <div class="col s3 no-padding-l">
                            <img class="materialboxed" data-caption="<?= $produit->nom; ?>" width="100%" src="<?= $produit->url_image; ?>">
                        </div>
                        <div class="col s7 no-padding-lr">
                            <h5><?= $produit->nom; ?></h5>
                            <input type="hidden" name="idp[]" value="<?= $produit->id; ?>"/>
                            <input type="hidden" name="qte[]" value="<?= $produit->nb; ?>"/>
                            <input type="hidden" name="prix[]" value="<?= floatval(floatval($produit->prix) * floatval($produit->nb)); ?>"/>
                            <h6>Version dématèrialisée</h6>
                            <p class="green-text">En stock</p>
                            <a class="grey-text">Retirer du panier</a>
                        </div>
                        <div class="input-field col s2 no-padding-lr">
                            <input id="quantite" class="validate" type="number" min="0" max="99" value="<?= $produit->nb; ?>">
                            <label for="quantite">Quantité</label>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col s4">
                <div class="z-depth-1 card white">
                    <div class="card-content">
                        <h4>On récapépète</h4>
                        <h5>3 Articles</h5>
                        <ul>
                            <?php $prix = 0; ?>
                            <?php foreach ($variables['produits'] as $produit): ?>
                                <?php $prix = $prix + floatval($produit->prix); ?>
                                <li><?= $produit->nom; ?> <span>(x<?= $produit->nb; ?>)</span><span class="right"><?= $produit->prix; ?>€</span></li>
                            <?php endforeach; ?>
                        </ul>
                        <h5 class="red-text">Total <span class="right"><?= $prix; ?>€</span></h5>
                    </div>
                    <div class="card-action clearfix">
                        <button type="submit" class="z-depth-0 btn orange waves-light waves-effect">Je craque</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col s12">
            <a class="btn red darken-1 waves-light waves-effect" href="#">Vider le panier</a>
        </div>
    </div>
</div>