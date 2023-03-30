<?php
    include('connexion-db.php');

    $nom = htmlspecialchars($_POST['nomPro']);
    $prenom = htmlspecialchars($_POST['prenomsPro']);
    $numerow = htmlspecialchars($_POST['numeroPro']);
    $email = htmlspecialchars($_POST['emailPro']);
    $ville = htmlspecialchars($_POST['villePro']);
    $possession = htmlspecialchars($_POST['possessionPro']);
    if (!empty($nom) && !empty($prenom) && !empty($numerow) && !empty($email) && !empty($ville) && !empty($possession)) {

        $requete = $connexion->prepare("INSERT INTO proprietaires(nom_proprietaire, prenom_proprietaire, numero_proprietaire, email_proprietaire, ville_proprietaire, bien_proprietaire) VALUES (:nomPro, :prenomsPro, :numeroPro, :emailPro, :villePro, :possessionPro)");   
    
        $requete->bindvalue(':nomPro', $nom);
        $requete->bindvalue(':prenomsPro', $prenom);
        $requete->bindvalue(':numeroPro', $numerow);
        $requete->bindvalue(':emailPro', $email);
        $requete->bindvalue(':villePro', $ville);
        $requete->bindvalue(':possessionPro', $possession);
        
        $requete->execute(); 
        
        header("Location:../dashboard/ajouter-proprietaire.php?mess-enr=bien enregistré");
    }
?>