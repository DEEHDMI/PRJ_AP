<div class="body_light">
<button class="btn">Light/Dark</button>
<script src="./assets/js/darkMode.js"></script>
<script src="./assets/js/jquery.js"> </script>
<script src="./assets/js/jquery.dataTables.min.js"></script>
</br>
</br>
</br>


<h1>Liste du Personnel</h1>

<table id="tableStudent"  class="table">
        <thead>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>

                <?php
                    if($_SESSION['statut']=='admin'){
                        echo '<th>Actions</th>';

                    }
                ?>
                       
        </thead>
   
        <tbody class="tbody">
            <?php

            foreach($all_perso as $ligne){

                echo '<tr>
                    <td>'. $ligne->idMembre.' </td>
                    <td>'.$ligne->nomMembre.'</td>
                    <td>'.$ligne->pnomMembre.'</td>
                    <td>'.$ligne->statut.'</td></tr>';

                if($_SESSION['statut']=='admin'){
                    echo'<tr><td><a href="">Modifier</a>  
                    <a href="">Supprimer</a></td></tr>';
                }  
            }    
            ?>      
        </tbody>
</table>
<script src="./assets/js/tableStudent.js"> </script>
<div>