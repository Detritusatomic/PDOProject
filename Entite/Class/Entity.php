<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Entity {
    public $table;
    public $class;
    
    public function __construct(){
        //parent constructeur
    }
    
    public function findAll(){
        $sql = "SELECT * FROM " . $this->table;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject($this->class);
    }
    
    public function findById($id){
        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . (int) $id;
        $database = Database::getInstance();
        $req = $database->prepare($sql);
        $req->execute();
        return $array = $req->fetchObject($this->class);
    }
}