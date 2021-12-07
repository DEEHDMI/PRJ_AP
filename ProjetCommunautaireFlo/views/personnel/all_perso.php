<div class="body_light">
<button class="btn">Light/Dark</button>
<script src="./assets/js/darkMode.js"></script>
</br>
</br>
</br>


<h1>Liste du Personnel</h1>

<table class="table">
        <thead>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>
            
        </thead>
   
        <tbody>
            <?php

            foreach($all_perso as $ligne){

                echo '<tr>
                    <td>'. $ligne->idMembre.' </td>
                    <td>'.$ligne->nomMembre.'</td>
                    <td>'.$ligne->pnomMembre.'</td>
                    <td>'.$ligne->statut.'</td>
                </tr>';
                }    
            ?>      
        </tbody>
            </table>

<div>