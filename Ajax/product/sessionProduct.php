<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once '../../Entite/Class/Entity.php';
require_once '../../Entite/Produits.php';
require_once '../../Class/Database.class.php';
require_once '../../Class/Session.class.php';
$id = $_POST['id'];
//recuperation du produit avec l'entite produit
$produit = Produits::getProductById($id);
if(Session::isStarted())
    $_SESSION['produit'][] = $produit;
//verifier si un utilisateur est connecté
echo json_encode($produit);
