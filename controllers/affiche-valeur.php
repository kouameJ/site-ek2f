<?php
    $compteurMess = $connexion->query("SELECT * FROM messages");
    $nbrMessage = $compteurMess->rowCount();

    $compteurPro = $connexion->query("SELECT * FROM proprietaires");
    $nbrProprietaire = $compteurPro->rowCount();

    $compteurMai = $connexion->query("SELECT * FROM maisons");
    $nbrMaison = $compteurMai->rowCount();

    $listePro = $connexion->query("SELECT * FROM proprietaires");
    $listeProCounts = $listePro->fetchAll();

    $listeMai = $connexion->query("SELECT * FROM maisons");
    $listeMaiCounts = $listeMai->fetchAll();
?>