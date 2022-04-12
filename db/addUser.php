<?php

if (isset ($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $email = $_POST['mail'];
    $password = $_POST['password'];

    require_once './connect.php';

    $addUser = "INSERT INTO users (nom, mail, pass) 
                VALUES ('$firstname',($email),($password)";
    $conn->exec($addUser);
        echo('Utilisateur inséré dans la base de données');
    } else {
        echo('Erreur lors de l\'insertion');
};
