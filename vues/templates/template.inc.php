<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/stylesheet.css" />
        <title></title>
    </head>
    <body>
        <div id="header">
            <div id="margo">
                Margo
            </div>
            <div id="headerleft">?php include($this->lire('entete')); ?></div>
            <div id="headerRight">
                <a href="">Mon compte</a>
                |
                <a href="">Deconnexion</a>
            </div>
        </div>
        <section>
            <div class="left">
                <h4>Menu principal</h4>
                <ul>
                    <li><a href="">Acceuil</a></li>
                    <li><a href="">Enseignements</a></li>
                    <li><a href="">Fillières</a></li>
                    <li><a href="">Classes</a></li>
                    <li><a href="">Elèves</a></li>
                </ul>
            </div>
        </section>
        <div class="right">
            ?php include($this->lire('centre')); ?>
        </div>
    </body>
    <footer>
        ?php include($this->lire('pied')); ?>
    </footer>
</html>    
</body>
</html>
