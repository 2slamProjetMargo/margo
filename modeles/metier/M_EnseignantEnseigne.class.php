<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_EnseignantEnseigne
 *
 * @author btssio
 */
class M_EnseignantEnseigne {

    private $classe;
    private $intervenant;
    private $matiere;

    function __construct($classe, $intervenant, $matiere) {
        $this->classe = $classe;
        $this->intervenant = $intervenant;
        $this->matiere = $matiere;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getIntervenant() {
        return $this->intervenant;
    }

    public function getMatiere() {
        return $this->matiere;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function setIntervenant($intervenant) {
        $this->intervenant = $intervenant;
    }

    public function setMatiere($matiere) {
        $this->matiere = $matiere;
    }

}
