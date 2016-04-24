<div class="wrap white shadow1">
    <div class="row">
        <?php foreach ($variables['produits'] as $key => $produit) : ?>
            <div class="col s4">
                <?= Produits::display($produit) ?>
            </div>
            <?php if (($key + 1) % 3== 0) { ?>
            </div>
            <div class="row">
            <?php } ?>
        <?php endforeach; ?>
    </div>
</div>