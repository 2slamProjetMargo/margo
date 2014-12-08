<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Matiere
 *
 * @author btssio
 */
class M_Matiere {

    private $codeMatiere;
    private $libelleMatiere;

    function __construct($codeMatiere, $libelleMatiere) {
        $this->codeMatiere = $codeMatiere;
        $this->libelleMatiere = $libelleMatiere;
    }

    public function getCodeMatiere() {
        return $this->codeMatiere;
    }

    public function getLibelleMatiere() {
        return $this->libelleMatiere;
    }

    public function setCodeMatiere($codeMatiere) {
        $this->codeMatiere = $codeMatiere;
    }

    public function setLibelleMatiere($libelleMatiere) {
        $this->libelleMatiere = $libelleMatiere;
    }

}
