<?php
    $maVue = new V_Vue.(RACINE."vues/template.inc.php");
    
    $maVue->ajouter('titre','Acceuil');
    $maVue->ajouter('entete',RACINE.'vues/vueEntete.inc.php');
    $maVue->ajouter('centre',RACINE.'vues/vueCentre.inc.php');
    $maVue->ajouter('pied',RACINE.'vues/vuePied.inc.php');
        
    $maVue->afficher();
?>
