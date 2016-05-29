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
		$suggestions= Produits::getProduitsByIdCategorie($produit->id_categorie);
		
		//suppression du produit identique a celui de la page produit dans les suggestions
		foreach ($suggestions AS $key => $lignetableau) {
			if ($lignetableau->id == $id) unset($suggestions[$key]);
		}
		shuffle($suggestions); 
		$suggestions = array_values($suggestions);
		
        $this->moteur_vue->loadVue('index/produit.php', array(
            'produit' => $produit,
            'suggestions' => $suggestions
        ));
    }

}
