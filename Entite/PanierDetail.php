<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PanierDetail extends Entity {

    public $id;
    public $id_panier;
    public $id_produit;
    public $quantite;

    public function __construct() {
        parent::__construct();
        $this->table = 'panierDetail';
        $this->class = __CLASS__;
    }

    public function save() {
        $database = Database::getInstance();
        $sql = "INSERT INTO " . $this->table . " (id_panier, id_produit, quantite) "
                . "VALUES (" . $database->quote($this->id_panier) . ", " . $database->quote($this->id_produit) . ", " . $database->quote($this->quantite) . ")";
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }
    
    /** 
     * Methode : recuperation des details du panier
     * @param type $id_panier
     * @return type
     */
    public static function getDetails($id_panier){
        $sql = "SELECT * FROM panierDetail WHERE id_panier = " . (int) $id_panier;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}
