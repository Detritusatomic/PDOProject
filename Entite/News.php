<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class News extends Entity {
    
    public $id;
    public $titre;
    public $contenu;
    public $id_categorie;
    
    public function __construct() {
        parent::__construct();
        $this->table = 'news';
        $this->class = __CLASS__;
    }
    
    /**
     * Method : Recuperer tous les news
     * @return Produit object
     */
    public static function getNews() {
        $sql = "SELECT * FROM news";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_OBJ);
    }
    
}
