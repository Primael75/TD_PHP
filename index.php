<?php
    $hostname="localhost";
    $dbname="tp1";
    $dbusers="root";
    $dbpassword = "";

    try{
        $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbusers, $dbpassword); // caracteristique de la base de donnée sans mot de passe a la base de donnée
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = $connection->query("select * from user");
        //fetcALL : permet de recuprer toutes les lignes retournées par la requete
        $users=$req->fetchALL(PDO::FETCH_ASSOC);
        echo"<pre>";
        var_dump($users);
        echo"</pre>";
    }catch(PDOExeption $e){
        var_dump($e);
        die("Stop"); 
        // throw $th;
       
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
</head>
<body>
        <table class="table table-striped">
                <tr>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>Email</th>
                    <th>telephone</th>
                </tr>
                <?php 
                foreach($users as $value){
                echo "
                    <tr>
                        <td> ",$value['prenom']," </td>
                        <td> ",$value ['nom']," </td>
                        <td> ",$value ['email']," </td>
                        <td> ",$value ['telephone']," </td>

                    </tr>
                    ";
                }
                ?>
                
        </table>
</body>
</html>