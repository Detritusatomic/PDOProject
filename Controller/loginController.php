<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginController extends Controller {

    public function loginAction() {
        $this->moteur_vue->loadVue('login/index.php');
    }

    public function submitLoginAction() {
        if (Post::getValue('form_login')) { //formulaire login
            $hash = Users::getHash(Post::getValue('mail')); //mot de passe hashé
            if ($user = Users::getUserByLogin(Post::getValue('mail'), $hash['mdp']) && password_verify(Post::getValue('password') . $hash['token'], $hash['mdp'])){
                $user = (Users::getUserByLogin(Post::getValue('mail'), $hash['mdp']));
                //ajout de l'utilisateur dans la session
                Session::set('logged_in', true);
                Session::set('user', $user);
                $this->moteur_vue->redirect('membre', 'profil'); //redirection
            } else {
                //pas de connexion
                $feedback = 'Identifiant ou mot de passe éronné';
                $params = array(
                    'feedback' => $feedback,
                );
                $this->moteur_vue->loadVue('index/index.php', $params);
            }
        }
    }

    public function logoutAction() {
        //detruire la session
        Session::destroy();
        unset($_SESSION);
        $this->moteur_vue->redirect('index', 'index');
    }

    public function registerAction() {
        $this->moteur_vue->loadVue('login/register.php');
    }

    public function submitRegisterAction() {
        if (Post::getValue('register_form')) {
            //verification existance adresse mail
            if (!Users::getUserByMail(Post::getValue('mail'))) { //pas de mail
                //verification des mot de passe
                if (Post::getValue('password') == Post::getValue('password_confirm')) {
                    //Création de l'utilisateur : generation d'un token de longueur 25
                    $token = Token::generermdp(25);
                    $hash = Post::getValue('password') . $token;
                    $hash = password_hash($hash, PASSWORD_BCRYPT, ['cost' => 10]);
                    $new_user = new Users();
                    $new_user->setNom(ucfirst(strtolower(Post::getValue('nom'))));
                    $new_user->setPrenom(ucfirst(strtolower(Post::getValue('prenom'))));
                    $new_user->setMail(Post::getValue('mail'));
                    $new_user->setMdp($hash);
                    $new_user->setDroit(0); //droit par défaut
                    $new_user->setCp(Post::getValue('cp'));
                    $new_user->setVille(Post::getValue('ville'));
                    $new_user->setAdresse(Post::getValue('adresse'));
                    $new_user->setToken($token);
                    $new_user->setId();
                    if ($new_user->create()) {
                        //inscription OK : on connecte l'utilisateur
                        Session::set('logged_in', true);
                        Session::set('user', $new_user);
                        
                        //redirection vers la page de profil + preparation
                        $this->moteur_vue->redirect('membre', 'profil');
                    } else {
                        //probleme d'inscription
                        $feedback = 'Un problème est survenue, veuillez réessayer ultérieurement';
                        $this->moteur_vue->loadVue('login/register.php', array('feedback' => $feedback));
                    }
                } else {
                    //mot de passe pas similaire
                    $feedback = 'Les mots de passes ne sont pas identique';
                    $this->moteur_vue->loadVue('login/register.php', array('feedback' => $feedback));
                }
            } else {
                //adresse mail existe deja
                $feedback = 'Ce compte existe déjà';
                $this->moteur_vue->loadVue('login/register.php', array('feedback' => $feedback));
            }
        }
    }

}
