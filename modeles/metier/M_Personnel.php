<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Personnel
 *
 * @author btssio
 */
class M_Personnel extends M_Personne {

    public function __construct($idPersonne, $nom, $prenom, $situation, $adresse) {
        parent::__construct($idPersonne, $nom, $prenom, $situation, $adresse);
    }

}
