<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload {

    public $image_accepted = array('jpg', 'jpeg', 'gif', 'png'); //formats accepte en images
    public $image_size = 2000000; //taille en octets

    public function upload_image_product($file) {
        $base_dir = $this->get_upload_product_dir(); //definir le repertoire de base
        if (isset($file['tmp_name'])) {
            //c'est un fichier, verification si c'est une image
            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $this->image_accepted)) {
                //ok l'extention est bonne, verification de la taille
                $img_size = filesize($file['tmp_name']);
                if ($img_size <= $this->image_size) {
                    //l'image respecte les critéres, on peut faire l'upload
                    $nomImage = md5(uniqid()) . '.' . $extension;
                    if (move_uploaded_file($file['tmp_name'], $base_dir . $nomImage)) {
                        //upload russis
                        return $nomImage;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_upload_product_dir() {
        return __PATH__URI__ . 'media/img/product/';
    }

}
