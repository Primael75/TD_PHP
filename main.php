<?php
include('admin.php');
// $user = new User("user@email.fr", "pass123"); // new permet de créer une instance de user
$admin = new Admin("admin@mail.fr")
echo("<pre>"); // encadre $var_dump pour une meilleure présentation des informations transmises par var_dump
var_dump($admin->getEmail());
echo("</pre>");
?>