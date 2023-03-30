<?php
    include('connexion-db.php');

    if (isset($_POST["send-btn"])) {

        $idmodif = $_GET['idmodif'];
        $nom = htmlspecialchars($_POST['nomMod']);
        $prenom = htmlspecialchars($_POST['prenomMod']);
        $numerow = htmlspecialchars($_POST['numeroMod']);
        $email = htmlspecialchars($_POST['mailMod']);
        $ville = htmlspecialchars($_POST['villeMod']);
        $possession = htmlspecialchars($_POST['bienMod']);
        if (!empty($nom) && !empty($prenom) && !empty($numerow) && !empty($email) && !empty($ville) && !empty($possession)) {

            $requete = $connexion->prepare("UPDATE  proprietaires SET nom_proprietaire = ?, prenom_proprietaire = ?, numero_proprietaire = ?, email_proprietaire = ?, ville_proprietaire = ?, bien_proprietaire = ? WHERE id_proprietaire = $idmodif");  
            $requete->execute(array($nom, $prenom, $numerow, $email, $ville, $possession));
            
            header("Location:../dashboard/liste-proprietaire.php?mess-modif=bien modifié ");
        }
    }else{
        header("Location:../dashboard/liste-proprietaire.php?mess-no=le formulaire ne doit pas etre vide");
    }

    
?>