<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Etudiant
 *
 * @author btssio
 */
class M_Etudiant extends M_Personne {

    private $classe;

    public function __construct($idPersonne, $classe, $nom, $prenom, $situation, $adresse) {
        parent::__construct($idPersonne, $nom, $prenom, $situation, $adresse);
        $this->classe = $classe;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

}
