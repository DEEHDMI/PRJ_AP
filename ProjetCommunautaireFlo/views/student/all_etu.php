<div class="body_light">
<button class="btn">Light/Dark</button>
<script src="./assets/js/darkMode.js"></script>
</br>
</br>
</br>



<h1>Liste des étudiants</h1>

    <table class="table">

    
        <thead>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Statut</th>
            
        </thead>
   
        <tbody>
            <?php

            foreach($all_etu as $ligne){

                echo '<tr>
                    <td>'. $ligne->idMembre.' </td>
                    <td>'.$ligne->nomMembre.'</td>
                    <td>'.$ligne->pnomMembre.'</td>
                    <td>'.$ligne->classe.'</td>
                    <td>'.$ligne->statut.'</td>
                </tr>';
                }      
            ?>      
        </tbody>
    </table>

            </div>