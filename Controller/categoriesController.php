<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CategoriesController extends Controller {

    public function catAction($slug) {
        //recuperation des produits en fonction du slug
        $produits = Produits::getProductByCategorieSlug($slug);
        $categorie = Categories::getCategorieBySlug($slug);
        if (!empty($categorie)) {
            $this->moteur_vue->loadVue('categories/index.php', array(
                'produits' => $produits,
                'categorie' => $categorie
            ));
        } else {
            //404
            $this->moteur_vue->redirect('pageNotFound', 'index');
        }
    }

}
