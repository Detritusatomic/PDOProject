<script type="text/javascript" src="<?php echo __BASE__NO__PROTOCOL__ ?>media/js/admin/categories/format.js"></script>
<div class="row">
    <div class="col s12">
        <h2>Catégories - Formats - Admin</h2>
        <div class="divider blue"></div>
    </div>
</div>
<div class="row">
    <div class="col s6">
        <h5>Ajouter un format : </h5>
        <div class="divider"></div>
        <form method="post" action="">
            <input type="hidden" name="ajout_format" value="100"/>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="nom" type="text" name="nom" required>
                <label for="nom">Titre du format : </label>
            </div>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="format" type="text" name="format" required>
                <label for="format">Format (.mkv, .zip, .pdf, .epub, ...) : </label>
            </div>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="frais" type="text" name="frais" required>
                <label for="frais">Frais : </label>
            </div>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="langue" type="text" name="langue" required>
                <label for="langue">Langue : </label>
            </div>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="taille" type="text" name="taille" required>
                <label for="taille">Taille : </label>
            </div>
            <div class="input-field col s12">
                <input class="blue lighten-5" id="qualite" type="text" name="qualite" required>
                <label for="qualite">Qualité : </label>
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
            <th>format</th>
            <th>langue</th>
            <th>frais</th>
            <th>taille</th>
            <th>qualite</th>
            </thead>
            <tbody>
                <?php foreach ($variables['formats'] as $form) : ?>
                    <tr id="trc<?= $form->id; ?>">
                        <td>
                            <p class="center">
                                <input type="checkbox" name="bulk_select" class="bulk_select" id="bulk_<?= $form->id; ?>" value="<?= $form->id; ?>"/>
                                <label for="bulk_<?= $form->id; ?>"></label>
                            </p>
                        </td>
                        <td><?= $form->id; ?></td>
                        <td><?= $form->nom; ?></td>
                        <td><?= $form->format; ?></td>
                        <td><?= $form->langue; ?></td>
                        <td><?= $form->frais; ?></td>
                        <td><?= $form->taille; ?></td>
                        <td><?= $form->qualite; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
