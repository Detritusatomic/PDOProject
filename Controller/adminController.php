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
        $params['nbProduits'] = $nb_products;
        $this->moteur_vue->loadVueAdmin('admin/index.php', $params);
    }
}
