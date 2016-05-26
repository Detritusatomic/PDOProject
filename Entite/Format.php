<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Format extends Entity {

    public $id;
    public $nom;
    public $format;
    public $frais;
    public $langue;
    public $taille;
    public $qualite;

    public function __construct() {
        parent::__construct();
        $this->table = 'format';
        $this->class = __CLASS__;
    }

    public static function getFormats() {
        $sql = "SELECT * FROM format";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_OBJ);
    }

    public function save() {
        $database = Database::getInstance();
        $sql = "INSERT INTO " . $this->table . " (nom, format, frais, langue, taille, qualite) "
                . "VALUES (" . $database->quote($this->nom) . ", " . $database->quote($this->format) . ", " . $database->quote($this->frais) .
                ", " . $database->quote($this->langue) . ", " . $database->quote($this->taille) . ", " . $database->quote($this->qualite) .")";
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getFormat() {
        return $this->format;
    }

    function getFrais() {
        return $this->frais;
    }

    function getLangue() {
        return $this->langue;
    }

    function getTaille() {
        return $this->taille;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setFormat($format) {
        $this->format = $format;
    }

    function setFrais($frais) {
        $this->frais = $frais;
    }

    function setLangue($langue) {
        $this->langue = $langue;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }
    
    function getQualite() {
        return $this->qualite;
    }

    function setQualite($qualite) {
        $this->qualite = $qualite;
    }


}
