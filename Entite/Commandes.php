<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Commandes extends Entity {

    public $id;
    public $date;
    public $valeur;
    public $id_user;

    public function __construct() {
        parent::__construct();
        $this->table = 'commandes';
        $this->class = __CLASS__;
    }

    /**
     * Method : recuperer toutes les commandes
     * @return type
     */
    public static function getCommandes() {
        $sql = "SELECT * FROM commandes";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : recuperer toutes les commandes d'un utilisateur
     * @return type
     */
    public static function getCommandesByIdUser($id_user) {
        $sql = "SELECT * FROM commandes WHERE id_user = " . (int) $id_user;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        $array = [];
        foreach ($req->fetchAll(PDO::FETCH_OBJ) as $object) {
            $array[] = $object;
        }
        return $array;
    }

}
