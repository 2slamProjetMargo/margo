<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Enseignant
 *
 * @author btssio
 */
class M_Enseignant extends M_Intervenant {

    public function __construct($idPersonne, $nom, $prenom, $situation, $adresse) {
        parent::__construct($idPersonne, $nom, $prenom, $situation, $adresse);
    }

}
