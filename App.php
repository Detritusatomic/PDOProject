<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class App {

    public $url;
    public $controller;
    public $url_controller;
    public $methode;
    public $array_compose_url;
    public $param_1;

    public function __construct($url) {
        $this->url = $url;
        $this->array_compose_url = explode('/', $url);
        if (isset($this->array_compose_url[3])) {
            $this->controller = $this->array_compose_url[3];
            $this->url_controller = BASE_URI_CONTROLLER . $this->controller . 'Controller.php';
        } else {
            $this->controller = 'index';
            $this->url_controller = BASE_URI_CONTROLLER . $this->controller . 'Controller.php';
        }
        if (isset($this->array_compose_url[4])) {
            $this->methode = $this->array_compose_url[4];
        } else {
            $this->methode = 'index';
        }
        if(isset($this->array_compose_url[5])){
            $this->param_1 = $this->array_compose_url[5];
        }
    }

    /**
     * controller par defaut : indexController
     */
    public function run() {
        //rechercher le fichier si il existe
        if (file_exists($this->url_controller)) {
            require_once './Controller/' . $this->controller . 'Controller.php';
            if (method_exists(ucfirst($this->controller) . 'Controller', $this->methode . 'Action')) {
                $controller_name = $this->controller . 'Controller';
                $controleur = new $controller_name();
                /** test protection du controller */
                if ($controleur->system == 'protected' && !Session::isStarted()) {
                    //redirection vers l'accueil
                    require_once './Controller/indexController.php';
                    //renvoyer vers l'index
                    $controlleur = new IndexController();
                    $controlleur->indexAction();
                } else {
                    $controllerMethod = $this->methode . 'Action';
                    if($this->param_1){ //pas de 0
                        $controleur->$controllerMethod($this->param_1);
                    } else {
                        $controleur->$controllerMethod();
                    }
                }
            } else {
                //erreur 404
                require_once './Controller/pageNotFoundController.php';
                $controlleur = new PageNotFoundController();
                $controlleur->indexAction();
            }
        } else {
            require_once './Controller/indexController.php';
            //renvoyer vers l'index
            $controlleur = new IndexController();
            $controlleur->indexAction();
        }
    }

}
