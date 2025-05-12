<?php
include('database.php');
if(isset($_POST['register'])){
    extract($_POST);
    $password = sha1($password);
    try{
        $req = $connection->query("INSERT INTO user (prenom,nom,telephone,email,password) values ('$prenom','$nom','$telephone','$email', '$password')");
        $connection->exec($req);
    }catch (PDOException $e) {
        echo "Une erreur est survenue, Réessayer ultérieurement";
        var_dump($e->getMessage());
    }
    echo "Inscription réussie";
}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method= "post">
    <input name="prenom" type="text" placeholder="Prenom ">
    <br></br>
    <input name="nom" type="text" placeholder="Nom">
    <br></br>
    <input name="telephone" type="tel" placeholder="Numéro de telephone">
    <br></br>
    <input name="email" type="text" placeholder="Adresse email">
    <br></br>
    <input name="password" type="password" placeholder="mot de passe">
    <br></br>
    <input name="register" type="submit" value="connexion">
</body>
</html>