<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ek2f_db";

    try{
        $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo"Erreur :" . $e->getMessage();
    }
?>