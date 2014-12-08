<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Enfant
 *
 * @author btssio
 */
class M_Enfant {

    private $idEnfant;
    private $personnel;
    private $prenom;
    private $dateNaissance;

    function __construct($idEnfant, $personnel, $prenom, $dateNaissance) {
        $this->idEnfant = $idEnfant;
        $this->personnel = $personnel;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getIdEnfant() {
        return $this->idEnfant;
    }

    public function getPersonnel() {
        return $this->personnel;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setIdEnfant($idEnfant) {
        $this->idEnfant = $idEnfant;
    }

    public function setPersonnel($personnel) {
        $this->personnel = $personnel;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

}
