<?php

// Vérification que la superglobale $_POST n'est pas vide.
if(!empty($_POST)){
    if(
        isset($_POST['firstname'],
                $_POST['mail'],
                $_POST['password'])
        && !empty($_POST['firstname']) && !empty($_POST['mail']) && !empty($_POST['password'])
    ){
        // Le formulaire est complet
        // On récupère les données et on les protège (essentiellement contre les failles XSS)
        $firstname = strip_tags($_POST['firstname']);

        // On vérifie que l'email est bien un email
        if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
            die("L'adresse email est incorecte");
        }

        // Cryptage (hashage) du mot de passe
        $pass = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        require_once './connect.php';
    
        $addUser = "INSERT INTO `users` (Nom, Mail, Pass) 
                    VALUES (:name, :mail, $pass)";

        $requete = $conn->prepare($addUser);

        $requete->bindValue(":name", $firstname, PDO::PARAM_STR);
        $requete->bindValue(":mail", $email, PDO::PARAM_STR);

        if(!$requete->execute()){
            die("Une erreur est survenue");
        }

    } else {
        die("Le formulaire n'est pas complet");
    }
}