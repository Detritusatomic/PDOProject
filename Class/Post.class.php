<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post {

    public function __construct() {
        
    }

    public static function getValue($key) {
        if (isset($_POST[$key]))
            return htmlspecialchars($_POST[$key]);
        else
            return '';
    }
    
    public static function is_set($key){
        if(isset($_POST[$key]))
            return true;
        else
            return false;
    }

}
