<?php

class Controller {

    public function accueil($db) {
        include TEMPLATES_PAGES . "/accueil.php";
    }
    public function about() {
        include TEMPLATES_PAGES . "/about.php";
        
    }
    public function panier() {
        include TEMPLATES_PAGES . "/panier.php";
        
    }
    public function profil() {
        include TEMPLATES_PAGES . "/profil.php";
        
    }
    public function inscription() {
        include TEMPLATES_PAGES . "/inscription.php";
        
    }
    public function error() {
        include TEMPLATES_PAGES . "/error.php";
        
    }
}