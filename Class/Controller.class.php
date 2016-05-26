<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller {
    public $moteur_vue;
    public $database_instance;
    public $system; //defini la protection du controller
    public $page_name;
    
    public function __construct() {
        $this->moteur_vue = new MoteurVue();
        $this->database_instance = Database::getInstance();
        $this->system = 'default';
    }
    
    public function __toString() {
        return '__CONTROLLER__';
    }
}
