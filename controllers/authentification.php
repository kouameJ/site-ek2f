<?php 
session_start();
include "connexion-db.php"; 

    if (!empty($_POST['identifiant']) && !empty($_POST['pass'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $ident = validate($_POST['identifiant']);
        $passe = validate($_POST['pass']);

        $check = $connexion->prepare("SELECT * FROM admins WHERE identifiant_admin = ? AND mot_de_passe_admin = ?");
        $check->execute(array($ident, $passe));
        $user = $check->fetch();
        
        if($user){
            $_SESSION['idadmin'] = $user['id_admin'];
            $_SESSION['nomadmin'] = $user['nom_admin'];
            $_SESSION['prenomadmin'] = $user['prenom_admin'];
            header("Location:../dashboard/dash.php");
        }else{
            header("Location:../pages/connexion.php?erreurco=Identifiant ou Mot de passe incorrect");
        }
    }    
?>

