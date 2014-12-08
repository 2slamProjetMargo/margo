<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo RACINE; ?>/vue/css/stylesheet.css" />
        <title><?php echo $this->lire('titre'); ?></title>
    </head>
    <body>
        <div id="header">
            <div id="margo">
                Margo
            </div>
            <div id="headerleft"><?php include($this->lire('entete')); ?></div>
            <div id="headerRight">
                <a href="">Mon compte</a>
                |
                <a href="">Deconnexion</a>
            </div>
        </div>
        <aside>
            <div class="left">
                <h4>Menu principal</h4>
                <nav>
                    <ul>
                        <li><a href="">Acceuil</a></li>
                        <li><a href="">Enseignements</a></li>
                        <li><a href="">Fillières</a></li>
                        <li><a href="">Classes</a></li>
                        <li><a href="">Elèves</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <aside>
            <div class="right">
                <?php include($this->lire('centre')); ?>
            </div>
        </aside>
    </body>
    <footer>
        <?php include($this->lire('pied')); ?>
    </footer>
</html>    
</body>
</html>
