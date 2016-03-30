<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class IndexController extends Controller{
    
    public function indexAction(){
        $produits = Produits::getProduitsDESC();
        $best_products = Produits::getSuccess();
        $params['produits'] = $produits;
        $params['bestProduits'] = $best_products;
        $this->moteur_vue->loadVue('index/index.php', $params);
    }
}
