<header>
    <div>
        <a href ="index.php">
        <img src="assets/images/republique_francaise.png" alt="Logo de la République Française" class="logo">
        <img src="assets/images/crous_restauration.png" alt="Logo du CROUS Restauration" class="logo">
        </a>
    </div>
    <div>
        <?php
            if(isset($_SESSION["nom"]) && isset($_SESSION["prenom"])) {
                echo '<a href="connexion.php" class="button">'.$_SESSION["prenom"].' '.substr($_SESSION["nom"], 0, 1).'.</a>';
            } else {
                echo '<a href="connexion.php" class="button">Se connecter</a>';
            }
        ?>
        
    </div>
</header>
<div id="subheader">
    <a href="menu.php">Menu du jour</a>
    &bull;
    <a href="#">Modes de paiement</a>
    &bull;
    <a href="historique.php">Historique</a>
</div>