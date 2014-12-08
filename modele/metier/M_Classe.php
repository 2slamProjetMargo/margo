<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Classe
 *
 * @author btssio
 */
class M_Classe {

    private $codeClasse;
    private $filiere;
    private $libelle;

    function __construct($codeClasse, $filiere, $libelle) {
        $this->codeClasse = $codeClasse;
        $this->filiere = $filiere;
        $this->libelle = $libelle;
    }

    public function getCodeClasse() {
        return $this->codeClasse;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setCodeClasse($codeClasse) {
        $this->codeClasse = $codeClasse;
    }

    public function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

}
