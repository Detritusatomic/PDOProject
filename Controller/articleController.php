<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ArticleController extends Controller {

    public function referenceAction($id) {
        $produit = Produits::getProductById((int) $id);
        if ($produit) {
            $this->moteur_vue->loadVue('articles/pageproduitfilm.php', array(
                'produit' => $produit,
                'crossProduit' => Produits::getRandomProduct(4)
            ));
        } else {
            $this->moteur_vue->redirect('index', 'index');
        }
    }

}
