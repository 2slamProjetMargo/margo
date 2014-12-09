
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
            $listeEtudiants = $this->lireDonnee('listeEtudiants');
            foreach ($listeEtudiants as $etudiant) {
                //var_dump($etudiant); die;
                echo'<tr><td>' . $etudiant->getIdPersonne(). '</td>'
                        . '<td>' . $etudiant->getNom() . '</td>'
                        . '<td>' . $etudiant->getPrenom() . '</td>'
                        . '<td>' . $etudiant->getSituation() . '</td>'
                        . '<td>' . $etudiant->getAdresse() . '</td>'
                        . '<td>' . $etudiant->getClasse() . '</td>'
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