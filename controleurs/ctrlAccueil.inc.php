<?php
    $maVue = new V_Vue.(RACINE."/vue/template.inc.php");
    
    $maVue->ajouter('titre','Acceuil');
    $maVue->ajouter('entete',RACINE.'/vue/vueEntete.inc.php');
    $maVue->ajouter('centre',RACINE.'/vue/vueCentre.inc.php');
    $maVue->ajouter('pied',RACINE.'/vue/vuePied.inc.php');
        
    $maVue->afficher();
?>
