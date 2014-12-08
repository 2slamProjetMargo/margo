<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Personne
 *
 * @author btssio
 */
class M_Personne {

    private $idPersonne;
    private $nom;
    private $prenom;
    private $situation;
    private $adresse;

    function __construct($idPersonne, $nom, $prenom, $situation, $adresse) {
        $this->idPersonne = $idPersonne;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->situation = $situation;
        $this->adresse = $adresse;
    }

    public function getIdPersonne() {
        return $this->idPersonne;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getSituation() {
        return $this->situation;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setSituation($situation) {
        $this->situation = $situation;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

}
