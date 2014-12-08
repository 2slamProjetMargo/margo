<?php

/**
 * Description of C_ControleurGenerique
 *
 * @author btssio
 */
abstract class C_ControleurGenerique {

    protected $vue;

    function setVue($vue) {
        $this->vue = $vue;
    }
    
    function afficheListeEleve(){
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));       
        $this->vue->ecrireDonnee('centre', "../vues/includes/centreListeEleve.inc.php");
               
        $this->vue->afficher();
    }

}

