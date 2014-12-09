<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of M_DaoClasse
 *
 * @author btssio
 */
class M_DaoClasse extends M_DaoGenerique{
    
    
        /**
     * Redéfinition de la méthode abstraite de M_DaoGenerique
     * Permet d'instancier un objet d'après les valeurs d'un enregistrement lu dans la base de données
     * @param tableau-associatif $unEnregistrement liste des valeurs des champs d'un enregistrement
     * @return objet :  instance de la classe métier, initialisée d'après les valeurs de l'enregistrement 
     */
    public function enregistrementVersObjet($enreg) {
        
        $retour = new M_Classe(
                $enreg['CODECLASSE'], $enreg['CODEFILIERE'], $enreg['LIBCLASSE']
                );
        return $retour;
    }
    
    
    
     /**
     * Lire tous les enregistrements d'une table
     * @return tableau-associatif d'objets : un tableau d'instances de la classe métier
     */
    function getOneById($codeClasse) {
        $sql = "SELECT CODECLASSE, CODEFILIERE, LIBCLASSE FROM CLASSE WHERE CODECLASSE = ".$codeClasse.";";
        try {
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête PDO
            if ($queryPrepare->execute()) {
                // si la requête réussit :
                // initialiser le tableau d'objets à retourner
                $retour = array();
                // pour chaque enregistrement retourné par la requête
                $enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC);
                    // construir un objet métier correspondant
                $unObjetMetier = $this->enregistrementVersObjet($enregistrement);
                    // ajouter l'objet au tableau
                $retour = $unObjetMetier;
            
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    public function insert($objetMetier) {
        
    }

    public function objetVersEnregistrement($objetMetier) {
    }
    

    public function update($idMetier, $objetMetier) {
        
    }

}