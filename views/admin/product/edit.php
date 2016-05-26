<div class="row">
    <div class="col s12">
        <h2>Modification du produit : <?= $variables['produit']->nom; ?></h2>
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
                        <input class="blue lighten-5" id="nom" type="text" name="nom" value="<?= $variables['produit']->nom; ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h5>Description :</h5>
                    <div class="divider"></div>
                    <textarea name="description" id="description">
                        <?= $variables['produit']->description; ?>
                    </textarea>
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
                        <input class="blue lighten-5" id="prix" type="text" name="prix" value="<?= $variables['produit']->prix; ?>" required>
                        <label for="prix">Prix du produit:</label>
                    </div>
                    <div class="input-field col s12">
                        <input class="blue lighten-5" id="version" type="text" name="version" value="<?= $variables['produit']->version; ?>" required>
                        <label for="version">Version du produit:</label>
                    </div>
                    <div class="input-field col s12">
                        <select class=" blue lighten-5" required name="categorie">
                            <option value="" disabled selected>Choisir la catégorie</option>
                            <?php foreach ($variables['categories'] as $cat) : ?>
                                <option value="<?= $cat->id; ?>" <?php if ($cat->id == $variables['produit']->id_categorie) echo 'selected'; ?>><?= $cat->nom; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Catégorie</label>
                        <script>
                            $('select').material_select();
                        </script>
                    </div>
                    <div class="input-field col s12">
                        <input class="blue lighten-5" id="quantite" min="0" type="number" name="quantite" value="<?= $variables['produit']->quantite; ?>" required>
                        <label for="quantite">Quantite du produit:</label>
                    </div>
                </div>
                <div class="col s6">
                    <h5>Image : </h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s4">
                            <img class="responsive-img" src="<?= $variables['produit']->url_image; ?>" width="164" height="164" />
                        </div>

                        <div class="col s8">
                            <div class="input-field col s12">
                                <input disabled class="blue lighten-5" id="url" type="text" name="url" value="<?= $variables['produit']->url_image; ?>" >
                                <label for="url">Url actuelle :</label>
                            </div>
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
                    <textarea name="synopsis" id="synopsis">
                        <?= $variables['produit']->synopsis; ?>
                    </textarea>
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
                    <input class="blue lighten-5" name="genre" id="genre" type="text" length="255" value="<?= $variables['produit']->genre; ?>">
                    <label for="genre">Genre :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="bandeau" id="bandeau" type="text" length="50" value="<?= $variables['produit']->bandeau; ?>">
                    <label for="bandeau">Bandeau :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="avis" id="avis" type="number" length="255" min='0' max='10' value="<?= $variables['produit']->avis_site; ?>">
                    <label for="avis">Avis du site :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="acteurs" id="acteurs" type="text" length="255" value="<?= $variables['produit']->acteurs; ?>">
                    <label for="acteurs">Acteurs :</label>
                </div>
                <div class="input-field col s12">
                    <input class="blue lighten-5" name="note" id="note" type="text" length="255" value="<?= $variables['produit']->note; ?>">
                    <label for="note">Note sur le film :</label>
                </div>
            </div>
            <input type="hidden" name="edit_product" value="11"/>
            <button class="btn waves-effect waves-light" type="submit" name="action">Modifier le produit</button>
            <button class="btn waves-effect waves-light red" onclick="history.go(-1)">Retour</button>
        </form>
    </div>
</div>
