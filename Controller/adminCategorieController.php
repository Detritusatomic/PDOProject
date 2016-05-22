<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class adminCategorieController extends Controller {

    public function indexAction() {
        //formulaire ajout
        if (Post::is_set('ajout_cat')) {
            $categorie = new Categories();
            $categorie->setNom(Post::getValue('nom'));
            $categorie->setColor(Post::getValue('color'));
            $categorie->setDescription(Post::getValue('description'));
            $categorie->setSlug(Tools::suppr_accents(Post::getValue('nom')));
            if (Post::getValue('in_menu') == 'on') { //dans le menu
                $categorie->setIn_menu(1);
            } else { // pas dans le menu
                $categorie->setIn_menu(0);
            }
            //creation de la catégorie
            $categorie->save();
            $this->moteur_vue->redirect('adminCategorie', 'index');
        }

        $this->moteur_vue->loadVueAdmin('admin/categories/index.php', array(
            'categories' => Categories::getCategories(),
        ));
    }
    
    public function formatsAction(){
        //formulaire ajout format
        if(Post::is_set('ajout_format')){
            $format = new Format();
            $format->setFormat(Post::getValue('format'));
            $format->setFrais(Post::getValue('frais'));
            $format->setLangue(Post::getValue('langue'));
            $format->setNom(Post::getValue('nom'));
            $format->setTaille(Post::getValue('taille'));
            $format->setQualite(Post::getValue('qualite'));
            $format->save();
            $this->moteur_vue->redirect('adminCategorie', 'formats');
        }
        
        $this->moteur_vue->loadVueAdmin('admin/categories/formats.php', array(
            'categories' => Categories::getCategories(),
            'formats' => Format::getFormats()
        ));
    }

}
