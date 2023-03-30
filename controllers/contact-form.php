<?php
    include('connexion-db.php');

    $nom = htmlspecialchars($_POST['nommessages']);
    $email = htmlspecialchars($_POST['emailmessages']);
    $telephone = htmlspecialchars($_POST['telephonemessages']);
    $message = htmlspecialchars($_POST['textmessages']);

    if (!empty($nom) && !empty($email) && !empty($telephone) && !empty($message)) {
        
        $requete = $connexion->prepare('INSERT INTO messages(nom_message, email_message, telephone_message, text_message) VALUES (:nommessages, :emailmessages, :telephonemessages, :textemessages)');   
    
        $requete->bindvalue(':nommessages', $nom);
        $requete->bindvalue(':emailmessages', $email);
        $requete->bindvalue(':telephonemessages', $telephone);
        $requete->bindvalue(':textemessages', $message);
        
        $requete->execute(); 
        
        header("Location:../pages/contact.php?erreurme=Message bien envoyé");
    }
?>