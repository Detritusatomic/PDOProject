<div class="row">
    <div class="col s12">
        <h2>Création d'un produit</h2>
        <div class="divider blue"></div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col s12">
                    <h5>Nom du produit :</h5>
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
                        <input class="blue lighten-5" id="prix" type="text" name="prix" required>
                        <label for="prix">Prix du produit:</label>
                    </div>
                    <div class="input-field col s12">
                        <input class="blue lighten-5" id="version" type="text" name="version" required>
                        <label for="version">Version du produit:</label>
                    </div>
                    <div class="input-field col s12">
                        <select class=" blue lighten-5" required name="categorie">
                            <option value="" disabled selected>Choisir la catégorie</option>
                            <?php foreach ($variables['categories'] as $cat) : ?>
                                <option value="<?= $cat->id; ?>"><?= $cat->nom; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Catégorie</label>
                        <script>
                            $('select').material_select();
                        </script>
                    </div>
                    <div class="input-field col s12">
                        <input class="blue lighten-5" id="quantite" min="0" type="number" name="quantite" required>
                        <label for="quantite">Quantite du produit:</label>
                    </div>
                </div>
                <div class="col s6">
                    <h5>Image : </h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <div class="file-field input-field col s12">
                                    <div class="btn">
                                        <span>Image</span>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="blue lighten-5 file-path validate" type="text" placeholder="Taille maximale : 2 MO">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h5>Synopsis (description courte) : </h5>
                    <div class="divider"></div>
                    <textarea name="synopsis" id="synopsis"></textarea>
                    <script>
                        CKEDITOR.replace('synopsis');
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h5>Informations supplémentaires : </h5>
                    <div class="divider"></div>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="genre" id="genre" type="text" length="255">
                    <label for="genre">Genre :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="bandeau" id="bandeau" type="text" length="50">
                    <label for="bandeau">Bandeau :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="avis" id="avis" type="number" length="255" min='0' max='10'>
                    <label for="avis">Avis du site :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="acteurs" id="acteurs" type="text" length="255">
                    <label for="acteurs">Acteurs :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="note" id="note" type="text" length="255">
                    <label for="note">Note sur le film :</label>
                </div>
            </div>
            <input type="hidden" name="create_product" value="11"/>
            <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter le produit</button>
            <button class="btn waves-effect waves-light red" onclick="history.go(-1)">Retour</button>
        </form>
    </div>
</div>
