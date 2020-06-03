<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

$sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `motdepasse`) 
        VALUES ( :nom, :prenom , :email , :motdepasse);";

$db = new PDO('mysql:host=localhost;dbname=security;charset=utf8', 'root', '');

$stmt = $db->prepare($sql);

$stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
$stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>
    L'utilisateur a bien été créé.
</body>
</html>
