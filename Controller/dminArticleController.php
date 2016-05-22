<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class adminArticleController extends Controller {

    public function indexAction() {
        $this->moteur_vue->loadVueAdmin('admin/articles/index.php', array(
            'articles' => News::getNews(),
        ));
    }
}