<script type="text/javascript" src="<?php echo __BASE__NO__PROTOCOL__ ?>media/js/admin/product/product.js"></script>
<div class="row">
    <div class="col s12">
        <h2>Produits - Admin</h2>
        <div class="divider blue"></div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <table>
            <thead>
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Synopsis</th>
            <th>Prix</th>
            <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($variables['produits'] as $key => $produit) : ?>
                    <tr id="tr<?= $produit->id; ?>"> 
                        <td><?= $produit->id; ?></td>
                        <td><img class="responsive-img" src="<?= $produit->url_image; ?>" width="150" height="150"/></td>
                        <td><?= $produit->nom; ?></td>
                        <td><?= strip_tags($produit->synopsis); ?></td>
                        <td><?= $produit->prix; ?>€</td>
                        <td>
                            <a href='<?php echo __BASE__URI__; ?>adminProduct/edit/<?= $produit->id; ?>'><i class="material-icons">create</i></a>
                            <a href='#' id="delete_produit" data-produit="<?= $produit->id; ?>"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
