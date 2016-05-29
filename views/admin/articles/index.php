<div class="row">
    <div class="col s12">
        <h2>Articles - Admin</h2>
        <div class="divider blue"></div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <table>
            <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Contenu</th>
            <th>Catégorie</th>
            <th>Produit</th>
            <th>Créateur</th>
            <th>Date</th>
            <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($variables['articles'] as $key => $article) : ?>
                    <tr id="tr<?= $article->id; ?>"> 
                        <td><?= $article->id; ?></td>
                        <td><?= $article->titre; ?></td>
                        <td><img class="responsive-img" src="<?= Produits::getProductImage($article->id_produit)['url_image']; ?>" width="150" height="150"/></td>
                        <td><?= substr(strip_tags($article->contenu), 0, 300) . '...'; ?></td>
                        <td><?= $article->id_categorie; ?></td>
                        <td><?= $article->id_produit; ?></td>
                        <td><?= $article->id_user; ?></td>
                        <td><?= $article->date; ?></td>
                        <td>Action</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
