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
            foreach ($_POST['idp'] as $index => $_id):
                $detail = new PanierDetail();
                $detail->id_panier = $panier->id;
                $detail->id_produit = $_id;
                $detail->quantite = $_POST['qte' . $_id];
                $detail->save();
            endforeach;
            //redirection vers une autre fonction
            $this->confimePanierAction($panier);
            return;
        }
        //traitement des produits dans la session
        $products = $_SESSION['produit'];
        $params = array(
            'produits' => $products
        );
        $this->moteur_vue->loadVue('index/panier.php', $params);
    }

    public function confimePanierAction($panier) {
        //recuperation de toutes les ligne
        $details = PanierDetail::getDetails($panier->id);
        $params['panier'] = $panier;
        $params['details'] = $details;
        $this->moteur_vue->loadVue('order/payment.php', $params);
    }

}
