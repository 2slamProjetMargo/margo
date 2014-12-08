<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Enseignement
 *
 * @author btssio
 */
class M_Enseignement {

    private $classe;
    private $matiere;
    private $volumeHoraireAnnuel;
    private $coef;

    function __construct($classe, $matiere, $volumeHoraireAnnuel, $coef) {
        $this->classe = $classe;
        $this->matiere = $matiere;
        $this->volumeHoraireAnnuel = $volumeHoraireAnnuel;
        $this->coef = $coef;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getMatiere() {
        return $this->matiere;
    }

    public function getVolumeHoraireAnnuel() {
        return $this->volumeHoraireAnnuel;
    }

    public function getCoef() {
        return $this->coef;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function setMatiere($matiere) {
        $this->matiere = $matiere;
    }

    public function setVolumeHoraireAnnuel($volumeHoraireAnnuel) {
        $this->volumeHoraireAnnuel = $volumeHoraireAnnuel;
    }

    public function setCoef($coef) {
        $this->coef = $coef;
    }

}
