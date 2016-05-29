<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Tools {

    public static function suppr_accents($str, $encoding = 'utf-8') {
        // transformer les caractères accentués en entités HTML
        $str = htmlentities($str, ENT_NOQUOTES, $encoding);

        // remplacer les entités HTML pour avoir juste le premier caractères non accentués
        // Exemple : "&ecute;" => "e", "&Ecute;" => "E", "Ã " => "a" ...
        $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);

        // Remplacer les ligatures tel que : Œ, Æ ...
        // Exemple "Å“" => "oe"
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
        // Supprimer tout le reste
        $str = preg_replace('#&[^;]+;#', '', $str);

        return $str;
    }
    
    public static function getNbProduitPanier() {
        if($_SESSION['produit']){
            $nombre = 0;
            foreach($_SESSION['produit'] as $key=>$produit){
                $nombre += $produit->nb;
            }
            return $nombre;
        } else {
            //aucun produits
            return 0;
        }
    }

}
