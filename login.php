<?php
include('db.php');
session_start();
if(isset($_SESSION["user"])){
    header("location: index.php");
}

$error = " ";



if(isset($_POST["login"])){
    extract($_POST);
    if(!empty($username)&& !empty($password)){
        $password = sha1($password);
        try {
            $req = $connection->query("SELECT * FROM  user  WHERE email = '$username' AND password='password' ");
        $user= $req->fetch();
        var_dump($user);
        } catch (PDOException $e) {
            var_dump($e ->getMessage());
        }
       
    }
    // if(isset($_POST['username']) && isset($_POST['password'])){
    // $_username = $_POST["username"]; // affiche le nom rentré
    // $_password = $_POST["password"]; // affiche le password rentré

    //     if($username == $_username && $password == $_password){
    //     header("location: index.php");
    //     $_SESSION["user"] = $username;// sert a faire de la variable user une variable globale qui sera obtenable partout
    //     var_dump($_SESSION);

        }else{
        $error = "identifiant incorrets";
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
    <form action="login.php"  method= "Post">
    <input name="username" placeholder="nom d'utilisateur">
    <br></br>
    <input name="password" type="password" placeholder="mot de passe">
    <br></br>
    <input name="login" type="submit" value="connexion">
</form>
    <p><?php echo $error; ?></p>
</body>
</html>