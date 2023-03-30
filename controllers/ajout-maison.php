<?php
    include('connexion-db.php');

    $image = "";
    if (isset($_POST["valider"])) {
        if (empty($_FILES['img'])) {
            $lieu = htmlspecialchars($_POST['lieuMai']);
            $titre = htmlspecialchars($_POST['titreMai']);
            $propio = htmlspecialchars($_POST['proMai']);
            $description = htmlspecialchars($_POST['desMai']);

            $image = $_FILES["img"]["name"];
            $upload = "../assets/images/".$image;
            move_uploaded_file($_FILES['img']['tmp_name'], $upload);
        

        $requete = $connexion->prepare("INSERT INTO maisons(lieu_maison, image_maison, titre_maison, description_maison, proprietaire_maison) VALUES (?,?,?,?,?)");
        $requete->execute(array($lieu,$image,$titre,$description,$propio));
        header("Location:../dashboard/liste-maison.php?mess-mai=Maison ajouter");
        }

        
        #$image = $_FILES["img"]["name"];
        #$imagePath = '../assets/images/'.basename($image);
        #$imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
        #$isUpLoadSuccess = false; 

        #if (isset($image)) {
        #    header("Location:../dashboard/liste-maison.php?mess-no=Choisir une image");
        #}else {
        #    $isUpLoadSuccess = true;
        #    if ($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif") {
        #        header("Location:../dashboard/liste-maison.php?mess-no=les fichiers autorisés sont jpg, jpeg, png ou gif");
        #    }
        #    if (file_exists($imagePath)) {
        #        header("Location:../dashboard/liste-maison.php?mess-no=l'image existe déjà");
        #    }
        #    if ($_FILES['img']['size'] > 500) {
        #        header("Location:../dashboard/liste-maison.php?mess-no=le fichier ne doit pas dépasser 2MO");
        #    }
        #    if ($isUpLoadSuccess) {
        #        if (!move_uploaded_file($_FILES['img']['tmp_name'], $imagePath)) {
        #            header("Location:../dashboard/liste-maison.php?mess-no=erreur lors du chargement");
        #        }
        #    }
        #}
        #if ($isUpLoadSuccess) {
        #    $requete = $connexion->prepare("INSERT INTO maisons(lieu_maison, image_maison, titre_maison, description_maison, propietaire_maison) VALUES (?,?,?,?,?)"); 
        #    $requete->execute(array($lieu,$image,$titre,$description,$propio));
        #    header("Location:../dashboard/liste-maison.php?mess-no=ok tout est bon");
        #}

    }else{
        header("Location:../dashboard/liste-maison.php?mess-no=le formulaire ne doit pas etre vide");
    }
    
?>