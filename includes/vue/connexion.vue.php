<form id="connexion" method="POST" action="includes/controleurs/connexion.php">
    <h1>Connectez-vous</h1>

    <?php
    if(isset($_GET["login"]) && $_GET["login"] == "needed") {
        echo "<div class='error'><b>Vous n'êtes pas connecté(e) !</b> Vous avez besoin d'être authentifié(e) pour accéder à cette page</div>";
    }
    ?>

    <input type = "mail" name = "mail" placeholder = "Saisissez votre adresse mail">
    <input type = "password" name = "mdp" placeholder = "Saisissez votre mot de passe">
    <input type = "submit" name = "bouton" value = "Se connecter" class="button">
</form>