<?php

class C_Eleve extends C_ControleurGenerique {

    /**
     * controleur= accueil & action= index
     * Afficher la page d'accueil
     */
    function afficheListeEleve() {
        // les fichiers
        $this->vue = new V_Vue("vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"vues/includes/accueil/centreListeEleve.inc.php");
        // les données
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        $this->vue->afficher();
    }

}
