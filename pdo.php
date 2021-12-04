<?php
    $bdname ='projetweb';
    $host ='localhost';
    $port='3306';
    $user='root';
    $pwd='';

    $db = new PDO("mysql:host=$host;port=$port;dbname=$bdname", $user, $pwd);
    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>