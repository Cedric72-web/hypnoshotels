<?php

include_once '../includes/header.php';
include_once '../includes/navbar.php';

?>
<form action="addUser.php" method="POST" class="sign-in-form">
    <h1>Inscription</h1>
    <div class="sign-in-form-items">
        <label for="firstname" class="sign-in-form-label">Prénom :</label><br>
        <input id="firstname" name="firstname" type="text">
    </div>
    <div class="sign-in-form-items">
        <label for="mail" class="sign-in-form-label">Email :</label><br>
        <input id="mail" name="mail" type="email">
    </div>
    <div class="sign-in-form-items">
        <label for="password" class="sign-in-form-label">Mot de passe :</label><br>
        <input id="password" name="password" type="password">
    </div>
    <button type="submit" >S'inscrire</button>
</form>

<?php

include_once '../includes/footer.php';