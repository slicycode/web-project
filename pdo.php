<?php
$nombase = "projetweb";
$nomserveur = "localhost";
$user = "root";
$mdp = "";

$db = new PDO(
    'mysql:host=' . $nomserveur . ';
     port=3306;dbname=' . $nombase,
    $user,
    $mdp
    );

    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>