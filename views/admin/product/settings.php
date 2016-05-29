<script type="text/javascript" src="<?php echo __BASE__NO__PROTOCOL__ ?>media/js/admin/product/settings.js"></script>
<div class="row">
    <div class="col s12">
        <h2>Paramètres - produits</h2>
        <div class="divider blue"></div>
    </div>
</div>

<div class="row">
    <div class="col s6">
        <h5>Gros kifs - mise en avant de produits</h5>
        <form method="post" action="">
            <input type='hidden' name='mise_avant' />
            <select class=" blue lighten-5" required name="mise_en_avant_1">
                <option value="" disabled selected>Produit à mettre en avant 1 :</option>
                <?php foreach ($variables['produits'] as $pro) : ?>
                    <option <?php if ($pro->id == $variables['mise_en_avant_1']) echo 'selected'; ?> value="<?= $pro->id; ?>"><?= $pro->nom; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Produit à mettre en avant (1)</label>

            <select class=" blue lighten-5" required name="mise_en_avant_2">
                <option value="" disabled selected>Produit à mettre en avant 2 :</option>
                <?php foreach ($variables['produits'] as $pro) : ?>
                    <option <?php if ($pro->id == $variables['mise_en_avant_2']) echo 'selected'; ?> value="<?= $pro->id; ?>"><?= $pro->nom; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Produit à mettre en avant (2)</label>
            <p><i>La mise en avant d'un produit permet de mettre en avant un produit sur la page d'accueil dans la catégorie gros kifs !</i></p>
            <script>
                $('select').material_select();
            </script>
            <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
        </form>
    </div>
    <div class="col s6">
        <div class="col s6">
            <a href="#" id="restore">
                <div class="card-panel red darken-1 admin_item_home center hoverable">
                    <span class="white-text">
                        <i class="material-icons" style="font-size: 150px;">restore</i>
                    </span>
                    <center><h5 class="white-text">Restaurer les produits</h5></center>
                </div>
            </a>
        </div>
        <div class="col s6">
            <a href="#" id="delete">
                <div class="card-panel red darken-1 admin_item_home center hoverable">
                    <span class="white-text">
                        <i class="material-icons" style="font-size: 150px;">delete</i>
                    </span>
                    <center><h5 class="white-text">Supprimer les produits</h5></center>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="divider blue"></div>