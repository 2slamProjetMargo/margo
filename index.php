<?php
ini_set('display_errors', 1);
require_once("includes/parametres.inc.php");
require_once("includes/fonctions.inc.php");

$nomControleur= getParametre('controleur', 'accueil');
//recherche du nom de l'action 'index' par défaut
$action= getParametre('action', 'defaut');

// Formation du nom du contrôleur
$nomClasseControleur= getNomClasse('C',$nomControleur); 
// Instanciation du controleur
$objetControleur= new $nomClasseControleur();

// Déclenchement de l'action
$objetControleur->$action();
?>