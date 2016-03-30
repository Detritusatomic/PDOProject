<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MembreController extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->system = 'protected';
    }

    public function profilAction() {
        $user = Users::getCurrentUser();
        $params = array(
            'user' => $user,
            'commandes' => Commandes::getCommandesByIdUser($user->id),
        );
        $this->moteur_vue->loadVue('membre/profil.php', $params);
    }

}
