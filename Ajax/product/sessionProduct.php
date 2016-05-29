<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../Entite/Class/Entity.php';
require_once '../../Entite/Produits.php';
require_once '../../Entite/Categories.php';
require_once '../../Class/Database.class.php';
require_once '../../Class/Session.class.php';
session_start();

$id = $_POST['id'];
//recuperation du produit avec l'entite produit
$produit = Produits::getProductById($id);
$map = function($v) {
    return $v->id;
};
$produit->categorie = Categories::getNameById($produit->id_categorie);
$array_of_id = array();

//verifier si la session est active
if (Session::isStarted()) {
    //verifier si il y a deja des produits dans la session
    if ($_SESSION['produit']) {
        foreach ($_SESSION['produit'] as $p) {
            $array_of_id[] = $p->id;
        }
        if (!in_array($produit->id, $array_of_id)) {
            //un seul produit
            $produit->nb = 1;
            $_SESSION['produit'][] = $produit;
        } else {
            //dans le cas ou le produit existe deja dans le panier
            foreach ($_SESSION['produit'] as $_p_session) {
                //on trouve le bon id est c'est bon
                if ($_p_session->id == $id) {
                    //ajout d'un element
                    $_p_session->nb += 1;
                }
            }
        }
    } else {
        //ajout normal, pas encore de produit dans la session
        $produit->nb = 1;
        $_SESSION['produit'][] = $produit;
    }
}
//verifier si un utilisateur est connecté
echo json_encode($produit);
