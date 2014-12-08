<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Filiere
 *
 * @author btssio
 */
class M_Filiere {

    private $codeFiliere;
    private $enseignant;
    private $libelleFiliere;

    function __construct($codeFiliere, $enseignant, $libelleFiliere) {
        $this->codeFiliere = $codeFiliere;
        $this->enseignant = $enseignant;
        $this->libelleFiliere = $libelleFiliere;
    }

    public function getCodeFiliere() {
        return $this->codeFiliere;
    }

    public function getEnseignant() {
        return $this->enseignant;
    }

    public function getLibelleFiliere() {
        return $this->libelleFiliere;
    }

    public function setCodeFiliere($codeFiliere) {
        $this->codeFiliere = $codeFiliere;
    }

    public function setEnseignant($enseignant) {
        $this->enseignant = $enseignant;
    }

    public function setLibelleFiliere($libelleFiliere) {
        $this->libelleFiliere = $libelleFiliere;
    }

}
