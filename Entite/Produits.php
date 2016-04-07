<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Produits extends Entity {

    public $id;
    public $nom;
    public $description;
    public $prix;
    public $version;
    public $id_categorie;
    public $url_image;
    public $genre;
    public $synopsis;
    public $note;
    public $avis_site;
    public $acteurs;
    public $bandeau;
    public $quantite;

    public function __construct() {
        parent::__construct();
        $this->table = 'produits';
        $this->class = __CLASS__;
    }

    /**
     * Method : Recuperer tous les produits
     * @return Produit object
     */
    public static function getProduits() {
        $sql = "SELECT * FROM produits";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Method : Recuperer tous les produits dans l'ordre
     * @return Produit object
     */
    public static function getProduitsDESC() {
        $sql = "SELECT * FROM produits ORDER BY id DESC";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Method : Recuperer un produit en fonction d'un id
     * @param int $id
     * @return Produit
     */
    public static function getProductById($id) {
        $sql = "SELECT * FROM produits WHERE id = " . (int) $id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject(__CLASS__);
    }

    /**
     * Method : récupere les meilleurs produits
     */
    public static function getSuccess() {
        $sql = "SELECT * FROM produits WHERE avis_site = '9' OR avis_site = '10' ORDER BY avis_site DESC";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchAll(PDO::FETCH_OBJ);
    }
    
    /** 
     * Method : recupere le nombre total de produits
     * @return type
     */
    public static function getNbProduits(){
        $sql = "SELECT * FROM produits";
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $req->rowCount();
    }

    /** public functions */

    /**
     * Method : mise a jour d'un produit
     * @return boolean
     */
    public function update() {
        $database = Database::getInstance();
        $sql = "UPDATE " . $this->table . ' SET nom = ' . $database->quote($this->nom) . ', description = "' . html_entity_decode($this->description) . '", prix = ' . $database->quote($this->prix) .
                ', quantite = ' . $database->quote($this->quantite) . ', version = ' . $database->quote($this->version) . ', id_categorie = ' . $database->quote($this->id_categorie) . ', url_image = ' . $database->quote($this->url_image) .
                ', genre = ' . $database->quote($this->genre) . ', synopsis = "' . html_entity_decode($this->synopsis) . '", note = ' . $database->quote($this->note) . ', avis_site = ' . $database->quote($this->avis_site) .
                ', acteurs = ' . $database->quote($this->acteurs) . ', bandeau = ' . $database->quote($this->bandeau) . 'WHERE id = ' . $this->id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }

    /**
     * Method : insertion d'un nouveau produit
     * @return boolean
     */
    public function save() {
        $database = Database::getInstance();
        $sql = "INSERT INTO " . $this->table . " (nom, description, prix, quantite, version, id_categorie, url_image, genre, synopsis, note, avis_site, acteurs, bandeau) "
                . "VALUES (" . $database->quote($this->nom) . ", '" . html_entity_decode($this->description) . "', " . $database->quote($this->prix) .
                ", " . $database->quote($this->quantite) . ", " . $database->quote($this->version) . ", " . $database->quote($this->id_categorie) .
                ", " . $database->quote($this->url_image) . ", " . $database->quote($this->genre) . ", '" . html_entity_decode($this->synopsis) . "', " . $database->quote($this->note) .
                ", " . $database->quote($this->avis_site) . ", " . $database->quote($this->acteurs) . ", " . $database->quote($this->bandeau) . ")";
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }

    public function delete() {
        $database = Database::getInstance();
        $sql = "DELETE FROM " . $this->table . " WHERE id = " . $this->id;
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }
	
	public function getStars(){
		$string='<i class="material-icons '.$this->getTextColor().'">';
		$star = $this->avis_site / 2;
		$reste = $this->avis_site % 2;
		
		for ($i = 0 + $reste; $i < $star; $i++) {
			$string.='star ';
		}
		
		if ($reste == 1)
			$string.='star_half';
		
		$string.='</i>';
		
		return $string;
	}
	
	public static function display($id){
		$produit=Produits::getProductById($id);
		$display='
		<div class="card white hoverable pointer no-margin-b">
			<div class="card-image">
				<img width="100%" src="'.$produit->getUrl_image().'">
			</div>
			<div class="card-content">
				<h5><strong>'.$produit->getNom().'</strong></h5>
				<p>'.$produit->getStars().'</p>
				<p class="'.$produit->getTextColor().'">'.$produit->getCategorie().'</p>
				<p><strong>Genres</strong> : '.$produit->getGenre().'</p>
				<br/><button class="btn z-depth-0 '.$produit->getColor().' waves-effect waves-light addpanier" data-color="'.$produit->getColor().'">je veux !</button>
			</div>
		</div>';
		
		echo $display;
	}
	
    /** getters and setter */
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrix() {
        return $this->prix;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getVersion() {
        return $this->version;
    }
	
    function getId_categorie() {
        return $this->id_categorie;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setVersion($version) {
        $this->version = $version;
    }

    function setId_categorie($id_categorie) {
        $this->id_categorie = $id_categorie;
    }

    function getUrl_image() {
        return $this->url_image;
    }

    function getGenre() {
        return $this->genre;
    }

    function getSynopsis() {
        return $this->synopsis;
    }

    function getAvis_gens() {
        return $this->avis_gens;
    }

    function getAvis_site() {
        return $this->avis_site;
    }

    function getActeurs() {
        return $this->acteurs;
    }

    function getBandeau() {
        return $this->bandeau;
    }

    function setUrl_image($url_image) {
        $this->url_image = $url_image;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
    }

    function setAvis_gens($avis_gens) {
        $this->avis_gens = $avis_gens;
    }

    function setAvis_site($avis_site) {
        $this->avis_site = $avis_site;
    }

    function setActeurs($acteurs) {
        $this->acteurs = $acteurs;
    }

    function setBandeau($bandeau) {
        $this->bandeau = $bandeau;
    }

    function getNote() {
        return $this->note;
    }

    function setNote($note) {
        $this->note = $note;
    }

	function getCategorie(){
		return Categories::getNameById($this->id_categorie)['nom'];
	}
	
	function getColor(){
		return str_replace('-text','',Categories::getNameById($this->id_categorie)['color']);
	}
	
	function getTextColor(){
		return Categories::getNameById($this->id_categorie)['color'];
	}
}
