<div class="row">
    <div class="col s12">
        <h2>Tableau de bord - Admin</h2>
        <div class="divider blue"></div>
    </div>
</div>

<div class='row'>
    <div class="col s4">
        <a href="">
            <div class="card-panel blue admin_item_home center">
                <span class="white-text">
                    <i class="material-icons" style="font-size: 150px;">shopping_cart</i>
                </span>
                <center><h5 class="white-text"><?= $variables['nbProduits']; ?> Produits</h5></center>
            </div>
        </a>
    </div>
    <div class="col s4">
        <a href="">
            <div class="card-panel red admin_item_home center">
                <span class="white-text">
                    <i class="material-icons" style="font-size: 150px;">grid_on</i>
                </span>
                <center><h5 class="white-text"><?= $variables['nbCategories']; ?> Catégories</h5></center>
            </div>
        </a>
    </div>
</div>

