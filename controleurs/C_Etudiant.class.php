<?php

class C_Etudiant extends C_ControleurGenerique {

    /**
     * controleur= accueil & action= index
     * Afficher la page d'accueil
     */
    function afficheListeEtudiants() {
        // les fichiers
        $this->vue = new V_Vue("vues/templates/template.inc.php");
        // les données
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        $daoListeEtudiants = new M_DaoEtudiant;
        $daoListeEtudiants->connecter();
        $listeEtudiants = $daoListeEtudiants->getAll();
        $this->vue->ecrireDonnee('listeEtudiants', $listeEtudiants);            
        $this->vue->ecrireDonnee('centre',"vues/includes/accueil/centreListeEtudiants.inc.php");
        $this->vue->afficher();
    }

}
