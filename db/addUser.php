<?php

if(!empty($_POST)){
    if(
        isset($_POST['firstname'], $_POST['mail'], $_POST['password'])
        && !empty($_POST['firstname']) && !empty($_POST['mail']) && !empty($_POST['password'])
    ){
        $firstname = $_POST['firstname'];
        $email = $_POST['mail'];
        $pass = $_POST['password'];

        require_once './connect.php';
    
        $addUser = "INSERT INTO users (Nom, Mail, Pass) 
                    VALUES (:name, :mail, :pass)";

        $requete = $conn->prepare($addUser);

        $requete->bindValue(":name", $firstname);
        $requete->bindValue(":mail", $email);
        $requete->bindValue(":pass", $pass);

        if(!$requete->execute()){
            die("Une erreur est survenue");
        }

    } else {
        die("Le formulaire n'est pas complet");
    }
}


// $host = "j8oay8teq9xaycnm.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
// $username = "xapu4xf76j1hpitc";
// $password = "hy63piq8eofy012c";
// $dbname = "pitfv5r4s2129e4r";

// try{
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connexion réussie";
//     $conn->exec($addUser);
//     echo('Utilisateur inséré dans la base de données');
// }
// catch(PDOException $e){
//     echo "Erreur : " . $e->getMessage();
// }
