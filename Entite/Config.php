<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class config extends Entity {
    public $id;
    public $key;
    public $value;
    
    public static function set($key, $value){
        //verifier si l'entite est presente
        $database = Database::getInstance();
        if(config::get($key)){
            $sql = "UPDATE `config` SET `value` = '" . $value . "' WHERE `config`.`key` = '" . $key . "';";
        } else {
            //on creer la valeur
            $sql = "INSERT INTO `config` (`key`, `value`) VALUES ('" . $key . "', '" . $value . "');";
        }
        $req = $database->prepare($sql);
        $req->execute();
        return true;
    }
    
    public static function get($key){
        //recuperer la valeur
        $database = Database::getInstance();
        $sql = "SELECT value FROM `config` WHERE `key` = '" . $key ."'";
        $req = $database->prepare($sql);
        $req->execute();
        $array = $req->fetch();
        if($array && !empty($array)){
            return $array['value'];
        } else {
            return false;
        }
    }
}
