<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminController extends Controller {
    
    public function indexAction() {
        //recuperer le nombre de produits
        $nb_products = Produits::getNbProduits();
        $nb_categories = Categories::getNbCategories();
        $this->moteur_vue->loadVueAdmin('admin/index.php', array(
            'nbProduits' => $nb_products,
            'nbCategories' => $nb_categories
        ));
    }
}
