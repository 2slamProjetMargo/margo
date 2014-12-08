<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of V_Vue
 *
 * @author btssio
 */
class V_Vue implements V_VueInterface{

    private $fichier;
    private $donnees;

    function __construct($chemin) {
        $this->fichier = $chemin;
        $this->donnees = array();
    }

    
    function afficher() {
        include($this->fichier);
    }


    function ajouter($donnees,$valeurDonnee) {
        $this->donnees[$donnees] = $valeurDonnee;
    }


    function lire($donnees) {
        $retour=null;
        if(isset($this->donnees[$donnees])){
            $retour=  $this->donnees[$donnees];
        }
        return $retour;  
    }
    
    public function getFichier() {
        return $this->fichier;
    }

    public function getDonnees() {
        return $this->donnees;
    }

    public function setFichier($fichier) {
        $this->fichier = $fichier;
    }

    public function setDonnees($donnees) {
        $this->donnees = $donnees;
    }

    public function __toString() {
        $etat="objet de type : ".getFichier($this);
    }
}
