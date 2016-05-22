<a id="totop" class="btn-floating btn-large tooltipped waves-effect waves-light  zztop <?php
if(isset($variables['categorie'][0]))echo str_replace('-text','',$variables['categorie'][0]['color']).' darken-2';else echo 'brown darken-3';?>brown darken-3" data-position="left" data-delay="50" data-tooltip="L' ascenceur !" onclick="$('html, body').animate({scrollTop: 0 }, 'slow');return false;">
    <i class="material-icons">navigation</i>
</a>

<footer class="page-footer  <?php
if(isset($variables['categorie'][0]))echo str_replace('-text','',$variables['categorie'][0]['color']).' darken-2';else echo 'brown darken-4';?>">
    <div class="wrap">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">La barre de recherche</h5>
                <form id="recherche">
					<div class="input-field">
						<i class="prefix blue-text text-darken-3 material-icons pointer hover-white" onclick="$('#recherche').submit()">search</i>
						<input type="text" id="search" name="search" required>
						<label for="search">Critère de recherche ...</label>
					</div>
				</form>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Le GPS</h5>
                <ul>
                    <li><a class="white-text" href="<?php echo __BASE__URI__; ?>index/index">Accueil</a></li>

                    <?php foreach (Categories::getMenu() as $item) : ?>
                        <li><a class="white-text" href="<?php echo __BASE__URI__; ?>categories/index/<?php echo $item['slug']; ?>"><?php echo $item['nom']; ?></a></li>
                    <?php endforeach; ?>
                    <li><a class="white-text" href="<?php echo __BASE__URI__; ?>index/index">Blog</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="wrap">
            © 2016 H1RM1
            <a class="grey-text text-lighten-4 right" href="#!">Nous contacter</a>
        </div>
    </div>
</footer>

</body>

</html>