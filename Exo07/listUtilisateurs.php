<?php

$db = new PDO('mysql:host=localhost;dbname=security;charset=utf8', 'root', '');

$sql = "SELECT * FROM utilisateur";

$stmt = $db->prepare($sql);
$stmt->execute();

$utilisateurs = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($utilisateurs as $utilisateur) {
                    echo '<tr>';
                    echo '<td>' . $utilisateur['id']. '</td>';
                    echo '<td>' . $utilisateur['nom']. '</td>';
                    echo '<td>' . $utilisateur['prenom']. '</td>';
                    echo '<td>' . $utilisateur['email']. '</td>';
                    echo '</tr>';
                }

            ?>
        </tbody>
    </table>
    
</body>
</html>



