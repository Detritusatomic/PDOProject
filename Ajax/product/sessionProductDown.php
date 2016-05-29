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
foreach ($_SESSION['produit'] as $key => $_p_session) {
    //on trouve le bon id est c'est bon
    if ($_p_session->id == $id) {
        //ajout d'un element
        $_p_session->nb -= 1;
        $produit = $_p_session;
        if($_p_session->nb == 0){
            //plus de produits
            unset($_SESSION['produit'][$key]);
        }
    }
}
echo json_encode($produit);
