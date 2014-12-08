<h1>Liste du personnel :</h1>
    <table id="tabListePersonnel">
        <thead id="enteteTabListePersonnel">
            <tr>
                <th>ID</th> 
                <th>Nom</th>  
                <th>Prénom</th>  
                <th>Situation</th>  
                <th>Adresse</th>   
            </tr>
            <?php
            $listePersonnel = $this->lireDonnee('listePersonnel');
            foreach ($listePersonnel as $personnel) {
                echo'<tr><td>"' . $personnel->getIdPersonne(). '"</td>'
                        . '<td>"' . $personnel->getNom() . '"</td>'
                        . '<td>"' . $personnel->getPrenom() . '"</td>'
                        . '<td>"' . $personnel->getSituation() . '"</td>'
                        . '<td>"' . $personnel->getAdresse() . '"</td>'
                        . '</tr>';
            }
            ?>
        </thead>
    
    </table>  