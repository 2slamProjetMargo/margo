<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="vues/css/stylesheet.css" />
        <title></title>
    </head>
    <body>
        <div id="header">
            <div id="margo">
                <img src="vues/image/margo.jpg"/>
            </div>
            <div id="headerleft"><?php include($this->lireDonnee('entete')); ?></div>
            <div id="headerRight">
                <a href="">Connexion</a>
            </div>
        </div>
        <div class="left">
            <?php include($this->lireDonnee('gauche')); ?>
        </div>
        <div class="center">
            <?php include($this->lireDonnee('centre')); ?>
        </div>
    </body>
    <footer>
        <?php include($this->lireDonnee('pied')); ?>
    </footer>
</html>    
</body>
</html>
