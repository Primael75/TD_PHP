<?php
$hostname ="localhost";
$dbname = "tp1";
$dbuser = "root";
$dbpassword = "";

try {

     $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword); // caracteristique de la base de donnée sans mot de passe a la base de donnée
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    //throw $th;
    die ("Base de donnée indisponible");
}
?>