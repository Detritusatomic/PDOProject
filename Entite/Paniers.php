<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Paniers extends Entity {

    public $id;
    public $id_user;
    public $id_commande;

    public function __construct() {
        parent::__construct();
        $this->table = 'paniers';
        $this->class = __CLASS__;
    }

    /**
     * method : recuperer tous les paniers
     */
    public static function getPaniers() {
        $sql = "SELECT * FROM paniers";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : recuperer un panier en fonction de son id
     * @param type $id
     * @return type
     */
    public static function getPanierById($id) {
        $sql = "SELECT * FROM paniers WHERE id = " . (int) $id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : recuperer un panier en fonction de la commande
     * @param type $id_commande
     * @return type
     */
    public static function getPanierByIdCommande($id_commande) {
        $sql = "SELECT * FROM paniers WHERE id_commande = " . (int) $id_commande;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : Recuperer un panier en fonction de l'utilisateur
     * @param type $id_user
     * @return type
     */
    public static function getPanierByIdUser($id_user) {
        $sql = "SELECT * FROM paniers WHERE id_user = " . (int) $id_user;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    public function save() {
        $database = Database::getInstance();
        $sql = "INSERT INTO " . $this->table . " (id_user, id_commande) "
                . "VALUES (" . $database->quote($this->id_user) . ", " . $database->quote($this->id_commande) . ")";
        $req = $database->prepare($sql);
        $req->execute();
        $stmt = $database->query("SELECT Max(id) FROM " . $this->table);
        $lastId = $stmt->fetch(PDO::FETCH_NUM);
        $lastId = $lastId[0];
        $this->id = $lastId;
        return $lastId;
    }

    /** getters and setters */
    function getId() {
        return $this->id;
    }

    function getId_user() {
        return $this->id_user;
    }

    function getId_commande() {
        return $this->id_commande;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setId_commande($id_commande) {
        $this->id_commande = $id_commande;
    }

    function getId_detail() {
        return $this->id_detail;
    }

    function setId_detail($id_detail) {
        $this->id_detail = $id_detail;
    }

}
