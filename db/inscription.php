<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <form action="addUser.php" method="POST" class="sign-in-form">
        <label for="firstname" class="sign-in-form-label">Prénom :</label>
        <input id="firstname" name="firstname" type="text">
        <label for="mail" class="sign-in-form-label">Email :</label>
        <input id="mail" name="mail" type="text">
        <label for="password" class="sign-in-form-label">Mot de passe :</label>
        <input id="password" name="password" type="text">
        <button type="submit" >S'inscrire</button>
    </form>
</body>
</html>