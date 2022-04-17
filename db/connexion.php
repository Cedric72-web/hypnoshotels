<?php

include_once '../includes/header.php';
include_once '../includes/navbar.php';

?>
<form action="" method="POST" class="sign-in-form">
    <div class="sign-in-form-items">
        <label for="mail" class="sign-in-form-label">Email :</label><br>
        <input class="sign-in-form-input id="mail" name="mail" type="email">
    </div>
    <div class="sign-in-form-items">
        <label for="password" class="sign-in-form-label">Mot de passe :</label><br>
        <input class="sign-in-form-input id="password" name="password" type="password">
    </div>
    <button class="sign-in-button" type="submit" >Se connecter</button>
    <a href="/db/inscription.php" class="sign-in-link">S'inscrire</a>
</form>

<?php

include_once '../includes/footer.php';