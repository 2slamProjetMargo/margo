<?php

class C_Accueil extends C_ControleurGenerique {

    /**
     * controleur= accueil & action= index
     * Afficher la page d'accueil
     */
    function defaut() {
        // les fichiers
        $this->vue = new V_Vue("vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"vues/templates/centre.inc.php");
        // les données
        $this->vue->ecrireDonnee('entete',"Accueil");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        $this->vue->afficher();
    }

}
