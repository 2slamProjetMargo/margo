
<!-- VARIABLES NECESSAIRES -->

    <h1>Liste des ensignements :</h1>
    <table id="tabListeEnseignements">
        <thead id="enteteTabListeEnseignements">
            <tr>
                <th>Classe</th> 
                <th>Matière</th>  
                <th>Volume horaire annuel</th>  
                <th>Coefficient</th>  
            </tr>
            <?php
            $listeEnseignements = $this->lireDonnee('listeEnseignements');
            foreach ($listeEnseignements as $enseignement) {
                echo'<tr><td>' . $enseignement->getClasse(). '</td>'
                        . '<td>' . $enseignement->getMatiere() . '</td>'
                        . '<td>' . $enseignement->getVolumeHoraireAnnuel() . '</td>'
                        . '<td>' . $enseignement->getCoef() . '</td>'
                        . '</tr>';
            }
            ?>
        </thead>
    
    </table>  