<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {

    protected $database;
    protected $db_server;
    protected $db_name;
    protected $db_pass;
    protected $db_user;
    protected $db_params;

    public function __construct() {
        try {
            $this->db_server = 'mysql.hostinger.fr';
            $this->db_name = 'u858125047_h1rm1';
            $this->db_user = 'u858125047_h1rm1';
            $this->db_pass = 'geoffrey1996';
            $this->db_params = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");
            $this->database = new PDO('mysql:host=' . $this->db_server . ';dbname=' . $this->db_name, $this->db_user , $this->db_pass , $this->db_params);
        } catch (Exception $ex) {
            die('erreur bdd' . $ex->getMessage());
        }
    }

    public function select($select, $from, $where) {
        if (is_array($select) && is_array($from) && is_array($where)) {
            $sql = 'SELECT ';
            //gestion select
            foreach ($select as $key => $s) {
                if (isset($select[$key + 1])) {
                    $sql .= $s . ', ';
                } else {
                    $sql .= $s;
                }
            }
            $sql .= 'FROM ';
            //gestion du from
            foreach ($from as $key => $f) {
                var_dump($f);
            }
            die($sql);
        } else {
            die('erreur :: tableau attendu');
        }
    }

    public static function getInstance() {
		$db_server = 'mysql.hostinger.fr';
		$db_name = 'u858125047_h1rm1';
		$db_user = 'u858125047_h1rm1';
		$db_pass = 'geoffrey1996';
        $bd = new PDO('mysql:host=' . $db_server . ';dbname=' . $db_name, $db_user , $db_pass , $db_params);
        return $bd;
    }

}
