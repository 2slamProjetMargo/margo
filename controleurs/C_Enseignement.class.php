<?php

class C_Enseignement extends C_ControleurGenerique {

    /**
     * controleur= accueil & action= index
     * Afficher la page d'accueil
     */
    function afficheListeEnseignements() {
        // les fichiers
        $this->vue = new V_Vue("vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        $daoListeEnseignements = new M_DaoEnseignement;
        $daoListeEnseignements->connecter();
        $listeEnseignements = $daoListeEnseignements->getAll();
        $this->vue->ecrireDonnee('listeEnseignements', $listeEnseignements);            
        $this->vue->ecrireDonnee('centre',"vues/includes/accueil/centreListeEnseignements.inc.php");
        $this->vue->afficher();
    }

}
