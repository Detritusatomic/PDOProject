<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends Entity {

    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $mdp;
    public $adresse;
    public $cp;
    public $ville;
    public $droit;

    public function __construct() {
        parent::__construct();
        $this->table = 'users';
        $this->class = __CLASS__;
    }

    /** method */

    /**
     * Method : Recuperer un utilisateur en fonction de son id
     * @param type $id
     * @return User object
     */
    public static function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = '" . (int) $id ."'";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : Recuperer un utilisateur en fonction de son email
     * @param type $email
     * @return User object
     */
    public static function getUserByMail($email) {
        $sql = "SELECT * FROM users WHERE mail = '" . $email . "'";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : Recuperation de tous les utilisateurs
     * @return User object
     */
    public static function getUsers() {
        $sql = "SELECT * FROM users";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : recuperer un utilisateur en fonction de son login
     * @param type $mail
     * @param type $password
     * @return type
     */
    public static function getUserByLogin($mail, $password) {
        $sql = "SELECT * FROM users WHERE mail = '" . $mail . "' AND mdp = '" . $password . "'";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        $array = $req->fetchObject(__CLASS__);
        if ($array)
            return $array;
        else
            return false;
    }

    /**
     * Method : recupere le user courrant
     * @return boolean
     */
    public static function getCurrentUser() {
        if (Session::isStarted()) {
            return Users::getUserById(Session::get('user')->id);
        } else {
            return false;
        }
    }
    

    public static function getHash($mail) {
        $sql = "SELECT mdp, token FROM users WHERE mail = '" . $mail."'";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        $array = $req->fetch();
        if ($array)
            return $array;
        else
            return false;
    }

    /** database create, update, delete */
    public function create() {
        $sql = "INSERT INTO users (id, nom, prenom, mail, mdp, adresse, cp, ville, droit, token) VALUE ('" . $this->id . "','" . $this->nom . "', '" . $this->prenom . "', '" . $this->mail . ""
                . "', '" . $this->mdp . "', '" . $this->adresse . "', '" . $this->cp . "', '" . $this->ville . "', '" . $this->droit . "', '" . $this->token . "')";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        return $req->execute();
    }

    /** getter and setter */
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getMail() {
        return $this->mail;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getCp() {
        return $this->cp;
    }

    function getVille() {
        return $this->ville;
    }

    function getDroit() {
        return $this->droit;
    }

    function getToken() {
        return $this->token;
    }

    function setId() {
        $sql = "SELECT max(id) as id FROM users";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        $id = $req->fetch();
        $this->id = intval($id['id']) + 1;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setCp($cp) {
        $this->cp = $cp;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setDroit($droit) {
        $this->droit = $droit;
    }

    function setToken($token) {
        $this->token = $token;
    }

}
