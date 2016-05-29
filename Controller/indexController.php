<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class IndexController extends Controller{
    
    public function indexAction(){
        $produits = Produits::getProduitsDESC();
        $best_products = Produits::getSuccess();
        $kiffs = Produits::getKiffs();
		$news = News::getNews();
		$params['news'] = $news;
        $params['produits'] = $produits;
        $params['bestProduits'] = $best_products;
        $params['kiffs'] = $kiffs;
        $this->moteur_vue->loadVue('index/index.php', $params);
    }
	
	public function articlesAction(){
		$news = News::getNews();
		$categories = Categories::getCategories();
		$coolnews=News::getCoolNews();
		$params['news'] = $news;
		$params['coolnews'] = $coolnews;
		$params['categories'] = $categories;
		$this->moteur_vue->loadVue('index/articles.php',$params);
	}
}
