<div class="row">
    <div class="col s12">
        <h2>Création d'un article</h2>
        <div class="divider blue"></div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <form action="" method="POST">
            <div class="row">
                <div class="col s12">
                    <h5>Nom de l'article :</h5>
                    <div class="divider"></div>
                    <div class="input-field col s12">
                        <input class="blue lighten-5" id="nom" type="text" name="nom" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h5>Description :</h5>
                    <div class="divider"></div>
                    <textarea name="description" id="description"></textarea>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <h5>Informations : </h5>
                    <div class="divider"></div>
                    <div class="input-field col s12">
                        <select class=" blue lighten-5" required name="categorie">
                            <option value="" disabled selected>Choisir la catégorie</option>
                            <?php foreach ($variables['categories'] as $cat) : ?>
                                <option value="<?= $cat->id; ?>"><?= $cat->nom; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Catégorie</label>
                    </div>
                    <div class="input-field col s12">
                        <select class=" blue lighten-5" required name="produit">
                            <option value="" disabled selected>Choisir le produit</option>
                            <?php foreach ($variables['produits'] as $pro) : ?>
                                <option value="<?= $pro->id; ?>"><?= $pro->nom; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Produit concerné par l'article</label>
                        <script>
                            $('select').material_select();
                        </script>
                    </div>
                </div>
            </div>
            <input type="hidden" name="create_article" value="11"/>
            <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter le produit</button>
            <button class="btn waves-effect waves-light red" onclick="history.go(-1)">Retour</button>
        </form>
    </div>
</div>

