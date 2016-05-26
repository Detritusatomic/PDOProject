<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MoteurVue {

    public $path;

    public function __construct() {
        $this->path = BASE_URI_VUE;
    }

    public function loadVue($vue, $param = null) {
        $variables = $param;
        require $this->path . '_template/header.php';
        require $this->path . $vue;
        require $this->path . '_template/footer.php';
    }

    public function loadController($controller_name, $method) {
        require_once './Controller/' . $controller_name . 'Controller.php';
        $controller_path = $controller_name . 'Controller';
        $controlleur = new $controller_path();
        $controllerMethod = $method . 'Action';
        $controlleur->$controllerMethod();
    }

    public function redirect($controller, $method) {
        header('Location:' . __BASE__URI__ . $controller . '/' . $method);
    }
    
    public function redirectWithParam($controller, $method, $param){
        header('Location:' . __BASE__URI__ . $controller . '/' . $method . '/' . $param);
    }

    public function loadVueAdmin($vue, $param = null) {
        $variables = $param;
        require $this->path . '_template/admin/header.php';
        require $this->path . $vue;
        require $this->path . '_template/admin/footer.php';
    }

}
