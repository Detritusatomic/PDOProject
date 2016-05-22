<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class OrderController extends Controller {

    public function indexAction() {
        if (isset($_POST['confirm_panier'])) {
            //creation d'un panier et du detail
            $panier = new Paniers();
            $panier->id_user = $_SESSION['user']->id;
            $panier->id_commande = null;
            $id = $panier->save();
            //creation des details
            foreach($_POST['idp'] as $index => $_id):
                $detail = new PanierDetail();
                $detail->id_panier = $panier->id;
                $detail->id_produit = $_id;
                $detail->quantite = $_POST['qte'][$index];
                $detail->save();
            endforeach;
            
            //redirection vers une autre fonction
            $this->confimePanierAction($panier);
            
        }
        //traitement des produits dans la session
        $products = $_SESSION['produit'];
        $map = function($v) {
            return $v->id;
        };
        if ($products) {
            $produits = array_unique($products, SORT_REGULAR); //version unique des produits
            $count = array_count_values(array_map($map, $products));
            foreach ($produits as $produit):
                foreach ($count as $key => $c):
                    if ($key == $produit->id) {
                        $produit->nb = $c;
                    }
                endforeach;
            endforeach;
        }
        $params = array(
            'produits' => $produits
        );
        $this->moteur_vue->loadVue('index/panier.php', $params);
    }
    
    public function confimePanierAction($panier){
        var_dump($panier); die;
    }

}
