<?php
    include('connexion-db.php');

    $id_proprietaire = $_GET['id_proprietaire'];
    $sup = $connexion->query("DELETE FROM proprietaires WHERE id_proprietaire=$id_proprietaire");

    header("Location:../dashboard/liste-proprietaire.php");
?>