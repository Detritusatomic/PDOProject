<script type="text/javascript" src="<?php echo __BASE__NO__PROTOCOL__ ?>media/js/admin/categories/categories.js"></script>
<div class="row">
    <div class="col s12">
        <h2>Catégories - Admin</h2>
        <div class="divider blue"></div>
    </div>
</div>
<div class="row">
    <div class="col s6">
        <h5>Ajouter un catégorie : </h5>
        <div class="divider"></div>
        <form method="post" action="">
            <input type="hidden" name="ajout_cat" value="100"/>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="nom" type="text" name="nom" required>
                <label for="nom">Nom de la catégorie : </label>
            </div>
            <div class="input-field col s12">
                <h5>Description :</h5>
                <div class="divider"></div>
                <textarea name="description" id="description"></textarea>
                <script>
                    CKEDITOR.replace('description');
                </script>
            </div>
            <div class="input-field col s12">
                <div class="row">
                    <div class="panel_color">
                        <input type="hidden" name="color" value="red-text" id="real_color_selected"/>
                        <div class="color-selected col s1 red z-depth-2" id="color_cat" data-color="red-text" style="height: 40px;">

                        </div>
                        <div class="col s1 blue" id="color_cat" data-color="blue-text" style="height: 40px;">

                        </div>
                        <div class="col s1 yellow" id="color_cat" data-color="yellow-text" style="height: 40px;">

                        </div>
                        <div class="col s1 pink" id="color_cat" data-color="pink-text" style="height: 40px;">

                        </div>
                        <div class="col s1 purple" id="color_cat" data-color="purple-text" style="height: 40px;">

                        </div>
                        <div class="col s1 indigo" id="color_cat" data-color="indigo-text" style="height: 40px;">

                        </div>
                        <div class="col s1 cyan" id="color_cat" data-color="cyan-text" style="height: 40px;">

                        </div>
                        <div class="col s1 teal" id="color_cat" data-color="teal-text" style="height: 40px;">

                        </div>
                        <div class="col s1 green" id="color_cat" data-color="green-text" style="height: 40px;">

                        </div>
                        <div class="col s1 lime" id="color_cat" data-color="lime-text" style="height: 40px;">

                        </div>
                        <div class="col s1 amber" id="color_cat" data-color="amber-text" style="height: 40px;">

                        </div>
                        <div class="col s1 brown" id="color_cat" data-color="brown-text" style="height: 40px;">

                        </div>
                    </div>
                </div>
            </div>
            <div class="input-field col s12" style="position: relative; margin-bottom: 60px;">
                <div class="switch">
                    <label>
                        Pas dans le menu
                        <input type="checkbox" name="in_menu">
                        <span class="lever"></span>
                        Dans le menu
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter
                        <i class="material-icons right">add</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col s6">
        <table class="striped">
            <thead>
            <th>select</th>
            <th>ID</th>
            <th>nom</th>
            <th>description</th>
            <th>color</th>
            </thead>
            <tbody>
                <?php foreach ($variables['categories'] as $cat) : ?>
                    <tr id="trc<?= $cat->id; ?>">
                        <td>
                            <p class="center">
                                <input type="checkbox" name="bulk_select" class="bulk_select" id="bulk_<?= $cat->id; ?>" value="<?= $cat->id; ?>"/>
                                <label for="bulk_<?= $cat->id; ?>"></label>
                            </p>
                        </td>
                        <td><?= $cat->id; ?></td>
                        <td><?= $cat->nom; ?></td>
                        <td><?= $cat->description; ?></td>
                        <td><div class="<?= $cat->color; ?>" style="width:100%; height: 20px;">TEXTE</div></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col s12">
                <a class="btn-floating btn-large waves-effect waves-light blue" id="delete_cat"><i class="material-icons">delete</i></a>
                <a class="btn-floating btn-large waves-effect waves-light blue" id="restore_cat"><i class="material-icons">restore</i></a>
            </div>
        </div>
    </div>
</div>