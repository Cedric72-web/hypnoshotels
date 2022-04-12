<?php

if (isset ($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $email = $_POST['mail'];
    $pass = $_POST['password'];

    $host = "j8oay8teq9xaycnm.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "xapu4xf76j1hpitc";
    $password = "hy63piq8eofy012c";
    $dbname = "pitfv5r4s2129e4r";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
    $addUser = "INSERT INTO users (Nom, Mail, Pass) 
                VALUES ('$firstname',($email),($pass)";
        $conn->exec($addUser);
        echo('Utilisateur inséré dans la base de données');
}
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
};
