<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Categories extends Entity {

    public $id;
    public $nom;
    public $in_menu;
    public $description;
    public $color;

    public function __construct() {
        parent::__construct();
        $this->table = 'categories';
        $this->class = __CLASS__;
    }

    /**
     * Method : recuperer les categories
     * @return type
     */
    public static function getCategories() {
        $sql = "SELECT * FROM categories";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        $array = [];
        foreach ($req->fetchAll(PDO::FETCH_OBJ) as $object) {
            $array[] = $object;
        }
        return $array;
    }

    /** 
     * Method : permet de recupérer le nom et la couleur associes a la categorie
     * @param type $id
     * @return type
     */
    public static function getNameById($id) {
        $sql = "SELECT nom, color FROM categories WHERE id = " . (int) $id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetch();
    }

    /**
     * Method : recuperer une categorie en fonction de son id
     * @param type $id
     * @return type
     */
    public static function getCategorieById($id) {
        $sql = "SELECT * FROM categories WHERE id = " . (int) $id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /** 
     * Method : permet de construire le menu
     * @return type
     */
    public static function getMenu() {
        $sql = "SELECT nom FROM categories WHERE in_menu = 1";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_ASSOC);
    }
    
    

    /** getters and setter */
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

}
