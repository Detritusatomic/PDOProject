<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

class ProduitController extends Controller {

    public function indexAction($id) {
        //recuperation du produit
        $produit = Produits::getProductById($id);
        $this->moteur_vue->loadVue('index/produit.php', array(
            'produit' => $produit
        ));
    }

}
