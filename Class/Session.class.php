<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Session {

    public function __construct() {
        die('pas de session en objet, juste statique');
    }

    public static function set($key, $value) {
        return $_SESSION[$key] = $value;
    }

    public static function isStarted() {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
            return true;
        else
            return false;
    }

    public static function unsetVar() {
        return session_unset();
    }

    public static function destroy() {
        //todo
        return session_destroy();
    }

    public static function start() {
        //todo
        return session_start();
    }

    public static function abort() {
        //todo
    }

    public static function get($key) {
        return $_SESSION[$key];
    }

}
