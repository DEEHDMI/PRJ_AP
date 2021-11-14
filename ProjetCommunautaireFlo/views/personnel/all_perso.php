<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>
<body>

<h1>Liste du Personnel</h1>

    <table>
        <thead>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Profil</th>
                <th>Fonction</th>
            
        </thead>
   
        <tbody>
            <?php

            foreach($all_perso as $ligne){

                echo '<tr>
                    <td>'. $ligne->idPersonnel.' </td>
                    <td>'.$ligne->nomPersonnel.'</td>
                    <td>'.$ligne->pnomPersonnel.'</td>
                    <td>'.$ligne->bio.'</td>
                    <td>'.$ligne->fonction.'</td>
                </tr>';
                }    
            ?>      
        </tbody>
    </table>


</body>
</html>