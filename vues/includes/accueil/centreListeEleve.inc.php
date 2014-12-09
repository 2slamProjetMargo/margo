
<!-- VARIABLES NECESSAIRES -->

    <h1>Liste des élèves :</h1>
    <table id="tabListeStage">
        <thead id="enteteTabListeStage">
            <tr>
                <th>ID</th> 
                <th>Nom</th>  
                <th>Prénom</th>  
                <th>Situation</th>  
                <th>Adresse</th>  
                <th>IdClasse</th>   
            </tr>
            <?php
            $listeEleve = $this->lireDonnee('listeStage');
            foreach ($listeEleve as $etudiant) {
                echo'<tr><td>"' . $etudiant->getIdPersonne(). '"</td>'
                        . '<td>"' . $etudiant->getNom() . '"</td>'
                        . '<td>"' . $etudiant->getPrenom() . '"</td>'
                        . '<td>"' . $etudiant->getSituation() . '"</td>'
                        . '<td>"' . $etudiant->getAdresse() . '"</td>'
                        . '<td>"' . $etudiant->getClasse().getCodeClasse() . '"</td>'
                        . '</tr>';
            }
            /*
            $daoListeDesStage = new M_DaoListeStage;
        $daoListeDesStage->connecter();
        $listeStage = $daoListeDesStage->getAll();
        print_r($listeStage);*/
            ?>
        </thead>
    
    </table>  