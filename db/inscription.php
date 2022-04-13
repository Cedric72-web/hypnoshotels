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
        <div>
            <label for="firstname" class="sign-in-form-label">Prénom :</label>
            <input id="firstname" name="firstname" type="text">
        </div>
        <div>
            <label for="mail" class="sign-in-form-label">Email :</label>
            <input id="mail" name="mail" type="email">
        </div>
        <div>
            <label for="password" class="sign-in-form-label">Mot de passe :</label>
            <input id="password" name="password" type="password">
        </div>
        <button type="submit" >S'inscrire</button>
    </form>
</body>
</html>