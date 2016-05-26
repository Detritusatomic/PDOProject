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
    
    public function createAction() {
        if(isset($_POST['create_article'])){
            $news = new News();
            $news->setTitre($_POST['nom']);
            $news->setContenu($_POST['description']);
            $news->setDate(date('Y-m-d'));
            $news->setId_user($_SESSION['user']->id);
            $news->setId_categorie($_POST['categorie']);
            $news->setId_produit($_POST['produit']);
            $news->save();
            $this->moteur_vue->redirect('adminArticle', 'index');
        }
        $produits = Produits::getProduits();
        $categories = Categories::getCategories();
        $this->moteur_vue->loadVueAdmin('admin/articles/create.php', array(
            'categories' => $categories,
            'produits' => $produits
        ));
    }
}