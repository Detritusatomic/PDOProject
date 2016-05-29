<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PageNotFoundController extends Controller{
    
    public function indexAction(){
        $this->moteur_vue->loadVue('index/404.php');
    }
}
