<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>
<body>

<h1>Liste des étudiants</h1>

    <table>
        <thead>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Profil</th>
                <th>Classe</th>
            
        </thead>
   
        <tbody>
            <?php

            foreach($all_etu as $ligne){

                echo '<tr>
                    <td>'. $ligne->idEtudiant.' </td>
                    <td>'.$ligne->nomEtudiant.'</td>
                    <td>'.$ligne->pnomEtudiant.'</td>
                    <td>'.$ligne->bio.'</td>
                    <td>'.$ligne->classe.'</td>
                </tr>';
                }    
            ?>      
        </tbody>
    </table>


</body>
</html>